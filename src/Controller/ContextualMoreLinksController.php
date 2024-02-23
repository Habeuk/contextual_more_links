<?php
declare(strict_types = 1);

namespace Drupal\contextual_more_links\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for contextual more links routes.
 */
final class ContextualMoreLinksController extends ControllerBase {
  
  /**
   * Builds the response.
   */
  public function __invoke(): array {
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!')
    ];
    
    return $build;
  }
  
  /**
   * --
   */
  public function buildRoute($paragraph) {
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!')
    ];
    return $build;
  }
  
}
