<?php

namespace Drupal\contextual_more_links\Plugin\Menu\ContextualLink;

use Drupal\Core\Menu\ContextualLinkDefault;
use Symfony\Component\HttpFoundation\Request;

/**
 *
 * @author stephane
 *        
 */
class EntityViewContextualLink extends ContextualLinkDefault {
  
  /**
   *
   * {@inheritdoc}
   */
  public function getTitle(Request $request = NULL) {
    // The title from YAML file discovery may be a TranslatableMarkup object.
    return (string) $this->pluginDefinition['title'];
  }
  
}