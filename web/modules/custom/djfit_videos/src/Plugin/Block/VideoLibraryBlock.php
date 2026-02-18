<?php

declare(strict_types=1);

namespace Drupal\djfit_videos\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the Video Library grid block.
 */
#[Block(
  id: 'djfit_video_library',
  admin_label: new TranslatableMarkup('DJ Fit Video Library'),
  category: new TranslatableMarkup('DJ Fit'),
)]
class VideoLibraryBlock extends BlockBase implements ContainerFactoryPluginInterface {

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

    $categories = $term_storage->loadByProperties([
      'vid' => 'video_categories',
    ]);
    $category_list = [];
    foreach ($categories as $term) {
      $category_list[] = [
        'tid' => $term->id(),
        'name' => $term->label(),
      ];
    }

    // Load featured video.
    $featured_ids = $node_storage->getQuery()
      ->condition('type', 'video')
      ->condition('status', 1)
      ->condition('field_video_featured', 1)
      ->sort('created', 'DESC')
      ->range(0, 1)
      ->accessCheck(TRUE)
      ->execute();

    $featured_video = NULL;
    if ($featured_ids) {
      $featured_node = $node_storage->load(reset($featured_ids));
      if ($featured_node) {
        $featured_video = $this->buildVideoData($featured_node);
      }
    }

    // Load all published videos.
    $video_ids = $node_storage->getQuery()
      ->condition('type', 'video')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->accessCheck(TRUE)
      ->execute();

    $videos = [];
    $nodes = $node_storage->loadMultiple($video_ids);
    foreach ($nodes as $node) {
      $videos[] = $this->buildVideoData($node);
    }

    return [
      '#theme' => 'djfit_video_library',
      '#categories' => $category_list,
      '#featured_video' => $featured_video,
      '#videos' => $videos,
      '#cache' => [
        'tags' => ['node_list:video'],
        'contexts' => ['url.query_args'],
      ],
    ];
  }

  protected function buildVideoData($node): array {
    $categories = [];
    foreach ($node->get('field_video_category')->referencedEntities() as $term) {
      $categories[] = [
        'tid' => $term->id(),
        'name' => $term->label(),
      ];
    }

    $media = $node->get('field_video_media')->entity;
    $video_url = '';
    $thumbnail_url = '';
    if ($media) {
      $source_field = $media->getSource()->getSourceFieldDefinition($media->get('bundle')->entity);
      $video_url = $media->get($source_field->getName())->value ?? '';

      $thumbnail = $media->getSource()->getMetadata($media, 'thumbnail_uri');
      if ($thumbnail) {
        $thumbnail_url = \Drupal::service('file_url_generator')->generateAbsoluteString($thumbnail);
      }
    }

    // Allow custom thumbnail to override oEmbed thumbnail.
    $custom_thumb = $node->get('field_video_thumbnail')->entity;
    if ($custom_thumb) {
      $thumb_source = $custom_thumb->getSource();
      $thumb_field = $thumb_source->getSourceFieldDefinition($custom_thumb->get('bundle')->entity);
      $file = $custom_thumb->get($thumb_field->getName())->entity;
      if ($file) {
        $thumbnail_url = \Drupal::service('file_url_generator')->generateAbsoluteString($file->getFileUri());
      }
    }

    return [
      'nid' => $node->id(),
      'title' => $node->getTitle(),
      'description' => $node->get('field_video_description')->value ?? '',
      'url' => $node->toUrl()->toString(),
      'video_url' => $video_url,
      'thumbnail_url' => $thumbnail_url,
      'categories' => $categories,
      'access' => $node->get('field_video_access')->value ?? 'free',
      'access_label' => $node->get('field_video_access')->value === 'members_only' ? 'Members Only' : 'Free',
      'duration' => $node->get('field_video_duration')->value ?? '',
      'featured' => (bool) $node->get('field_video_featured')->value,
    ];
  }

}
