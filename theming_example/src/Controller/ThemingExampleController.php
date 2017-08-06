<?php

namespace Drupal\theming_example\Controller;

use Drupal\contextual_links_example\Entity\CLEEntity;
use Drupal\Core\Controller\ControllerBase;
use Drupal\examples\Utility\DescriptionTemplateTrait;
use \Drupal\Core\Url;
/**
 * Controller routines for contextual example routes.
 */
class ThemingExampleController extends ControllerBase {

use DescriptionTemplateTrait;

  /**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'theming_example';
  }
  /**
   *
   */
  public function ExampleList() {
    $output['intro']['#markup'] = $this->description();;
    $output['list']['#theme'] = 'item_list';
    $output['list']['#items'][] = \Drupal::l(t('Simple page with a list'), 'examples/theming_example/theming_example');
    $output['list']['#items'][] = \Drupal::l(t('Simple form 1'), 'examples/theming_example/theming_example_select_form');
    $output['list']['#items'][] = \Drupal::lt('Simple form 2'), 'examples/theming_example/theming_example_text_form');
    return $output;
  }
}
