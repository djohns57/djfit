<?php

declare(strict_types=1);

namespace Drupal\djfit_resources\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Symfony\Component\DependencyInjection\ContainerInterface;

#[Block(
  id: 'djfit_resource_listing',
  admin_label: new TranslatableMarkup('DJ Fit Resource Listing'),
  category: new TranslatableMarkup('DJ Fit'),
)]
class ResourceListingBlock extends BlockBase implements ContainerFactoryPluginInterface {

  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    protected EntityTypeManagerInterface $entityTypeManager,
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition): static {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity_type.manager'),
    );
  }

  public function build(): array {
    $node_storage = $this->entityTypeManager->getStorage('node');
    $term_storage = $this->entityTypeManager->getStorage('taxonomy_term');

    $active_filter = \Drupal::request()->query->get('type', 'all');

    $terms = $term_storage->loadByProperties(['vid' => 'resource_categories']);
    $categories = ['all' => 'All'];
    $term_map = [];
    foreach ($terms as $term) {
      $key = str_replace([' ', '-'], '_', strtolower($term->label()));
      $categories[$key] = $term->label();
      $term_map[$key] = $term->id();
    }

    $query = $node_storage->getQuery()
      ->condition('type', 'resource')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->accessCheck(TRUE);

    if ($active_filter !== 'all' && isset($term_map[$active_filter])) {
      $query->condition('field_resource_category', $term_map[$active_filter]);
    }

    $nids = $query->execute();
    $resources = [];
    $nodes = $node_storage->loadMultiple($nids);

    foreach ($nodes as $node) {
      $resources[] = $this->buildResourceData($node);
    }

    return [
      '#theme' => 'djfit_resource_listing',
      '#categories' => $categories,
      '#active_filter' => $active_filter,
      '#resources' => $resources,
      '#cache' => [
        'tags' => ['node_list:resource'],
        'contexts' => ['url.query_args:type'],
      ],
    ];
  }

  protected function buildResourceData($node): array {
    $category_label = '';
    $category_key = '';
    $cat_ref = $node->get('field_resource_category')->entity;
    if ($cat_ref) {
      $category_label = $cat_ref->label();
      $category_key = str_replace([' ', '-'], '_', strtolower($cat_ref->label()));
    }

    $tags = [];
    foreach ($node->get('field_tags') as $tag_ref) {
      if ($tag_ref->entity) {
        $tags[] = $tag_ref->entity->label();
      }
    }

    $file_url = '';
    $file_entity = $node->get('field_resource_file')->entity;
    if ($file_entity) {
      $file_url = \Drupal::service('file_url_generator')->generateAbsoluteString($file_entity->getFileUri());
    }

    return [
      'nid' => $node->id(),
      'title' => $node->getTitle(),
      'description' => $node->get('field_resource_description')->value ?? '',
      'url' => $node->toUrl()->toString(),
      'file_url' => $file_url,
      'category_label' => $category_label,
      'category_key' => $category_key,
      'access' => $node->get('field_resource_access')->value ?? 'free',
      'format' => $node->get('field_resource_format')->value ?? 'PDF',
      'pages' => $node->get('field_resource_pages')->value ?? '',
      'tags' => $tags,
    ];
  }

}
