<?php
/**
 * @file
 * Contains \Drupal\theme_example\Controller\ThemeExampleController.
 */

namespace Drupal\theme_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for theme example routes.
 */
class ThemeExampleController extends ControllerBase {

  public function simple() {
    return [
      'example one' => [
        '#markup' => '<div>Markup Example</div>',
      ],
      'example two' => [
        '#type' => 'my_element',
        '#label' => $this->t('Example Label'),
        '#description' => $this->t('This is the description text.'),
      ],
    ];
  }
}
