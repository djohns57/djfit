<?php

declare(strict_types=1);

namespace Drupal\djfit_videos\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Symfony\Component\DependencyInjection\ContainerInterface;

#[Block(
  id: 'djfit_home_videos',
  admin_label: new TranslatableMarkup('DJ Fit Home Videos'),
  category: new TranslatableMarkup('DJ Fit'),
)]
class HomeVideosBlock extends BlockBase implements ContainerFactoryPluginInterface {

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
      ->condition('type', 'video')
      ->condition('status', 1)
      ->sort('field_video_featured', 'DESC')
      ->sort('created', 'DESC')
      ->range(0, 2)
      ->accessCheck(TRUE)
      ->execute();

    $videos = [];
    $nodes = $node_storage->loadMultiple($nids);

    foreach ($nodes as $node) {
      $thumbnail_url = '';
      $media = $node->get('field_video_media')->entity;
      if ($media) {
        $thumbnail = $media->getSource()->getMetadata($media, 'thumbnail_uri');
        if ($thumbnail) {
          $thumbnail_url = \Drupal::service('file_url_generator')->generateString($thumbnail);
        }
      }

      $custom_thumb = $node->get('field_video_thumbnail')->entity;
      if ($custom_thumb) {
        $thumb_source = $custom_thumb->getSource();
        $thumb_field = $thumb_source->getSourceFieldDefinition($custom_thumb->get('bundle')->entity);
        $file = $custom_thumb->get($thumb_field->getName())->entity;
        if ($file) {
          $thumbnail_url = \Drupal::service('file_url_generator')->generateString($file->getFileUri());
        }
      }

      $access = $node->get('field_video_access')->value ?? 'free';

      $videos[] = [
        'heading' => $node->getTitle(),
        'body' => $node->get('field_video_description')->value ?? '',
        'url' => $node->toUrl()->toString(),
        'image_url' => $thumbnail_url,
        'badge' => $access === 'members_only' ? 'MEMBERS' : 'FREE',
        'locked' => $access === 'members_only',
      ];
    }

    return [
      '#theme' => 'djfit_home_videos',
      '#videos' => $videos,
      '#cache' => [
        'tags' => ['node_list:video'],
      ],
    ];
  }

}
