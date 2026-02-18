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
  id: 'djfit_home_articles',
  admin_label: new TranslatableMarkup('DJ Fit Home Articles'),
  category: new TranslatableMarkup('DJ Fit'),
)]
class HomeArticlesBlock extends BlockBase implements ContainerFactoryPluginInterface {

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

    $nids = $node_storage->getQuery()
      ->condition('type', 'article')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->range(0, 3)
      ->accessCheck(TRUE)
      ->execute();

    $articles = [];
    $nodes = $node_storage->loadMultiple($nids);

    foreach ($nodes as $node) {
      $image_url = '';
      $media = $node->get('field_article_image')->entity;
      if ($media) {
        $file = $media->get('field_media_image')->entity;
        if ($file) {
          $image_url = \Drupal::service('file_url_generator')->generateString($file->getFileUri());
        }
      }

      $category_label = '';
      $cat_ref = $node->get('field_article_taxonomy')->entity;
      if ($cat_ref) {
        $category_label = $cat_ref->label();
      }

      $articles[] = [
        'tag' => $category_label,
        'date' => date('M j, Y', (int) $node->getCreatedTime()),
        'heading' => $node->getTitle(),
        'body' => $node->get('field_article_body')->value ?? '',
        'url' => $node->toUrl()->toString(),
        'image_url' => $image_url,
      ];
    }

    return [
      '#theme' => 'djfit_home_articles',
      '#articles' => $articles,
      '#cache' => [
        'tags' => ['node_list:article'],
      ],
    ];
  }

}
