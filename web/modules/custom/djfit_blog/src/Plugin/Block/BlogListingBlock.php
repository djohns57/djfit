<?php

declare(strict_types=1);

namespace Drupal\djfit_blog\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Symfony\Component\DependencyInjection\ContainerInterface;

#[Block(
  id: 'djfit_blog_listing',
  admin_label: new TranslatableMarkup('DJ Fit Blog Listing'),
  category: new TranslatableMarkup('DJ Fit'),
)]
class BlogListingBlock extends BlockBase implements ContainerFactoryPluginInterface {

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

    $active_filter = \Drupal::request()->query->get('category', 'all');

    $terms = $term_storage->loadByProperties(['vid' => 'blog_categories']);
    $categories = ['all' => 'All'];
    $term_map = [];
    foreach ($terms as $term) {
      $key = strtolower($term->label());
      $categories[$key] = $term->label();
      $term_map[$key] = $term->id();
    }

    $query = $node_storage->getQuery()
      ->condition('type', 'article')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->accessCheck(TRUE);

    if ($active_filter !== 'all' && isset($term_map[$active_filter])) {
      $query->condition('field_article_taxonomy', $term_map[$active_filter]);
    }

    $nids = $query->execute();
    $articles = [];
    $nodes = $node_storage->loadMultiple($nids);

    foreach ($nodes as $node) {
      $articles[] = $this->buildArticleData($node);
    }

    return [
      '#theme' => 'djfit_blog_listing',
      '#categories' => $categories,
      '#active_filter' => $active_filter,
      '#articles' => $articles,
      '#cache' => [
        'tags' => ['node_list:article'],
        'contexts' => ['url.query_args:category'],
      ],
    ];
  }

  protected function buildArticleData($node): array {
    $image_url = '';
    $media = $node->get('field_article_image')->entity;
    if ($media) {
      $file = $media->get('field_media_image')->entity;
      if ($file) {
        $image_url = \Drupal::service('file_url_generator')->generateString($file->getFileUri());
      }
    }

    $category = '';
    $category_label = '';
    $cat_ref = $node->get('field_article_taxonomy')->entity;
    if ($cat_ref) {
      $category_label = $cat_ref->label();
      $category = strtolower($cat_ref->label());
    }

    $tags = [];
    foreach ($node->get('field_tags') as $tag_ref) {
      if ($tag_ref->entity) {
        $tags[] = $tag_ref->entity->label();
      }
    }

    return [
      'nid' => $node->id(),
      'title' => $node->getTitle(),
      'body' => $node->get('field_article_body')->value ?? '',
      'url' => $node->toUrl()->toString(),
      'image_url' => $image_url,
      'category' => $category,
      'category_label' => $category_label,
      'author' => $node->get('field_article_author')->value ?? '',
      'read_time' => $node->get('field_article_read_time')->value ?? '',
      'date' => date('M j, Y', (int) $node->getCreatedTime()),
      'tags' => $tags,
    ];
  }

}
