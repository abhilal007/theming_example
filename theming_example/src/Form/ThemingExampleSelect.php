<?php

namespace Drupal\theming_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Core\Link;

/**
 *
 */
class ThemingExampleSelect extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'theming_example_select';
  }

  /**
   *
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $options = array(
    'newest_first' => t('Newest first'),
    'newest_last' => t('Newest last'),
    'edited_first' => t('Edited first'),
    'edited_last' => t('Edited last'),
    'by_name' => t('By name'),
  );
  $form['choice'] = array(
    '#type' => 'select',
    '#options' => $options,
    '#title' => t('Choose which ordering you want'),
  );
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Go'),
  );
  return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
      drupal_set_message(t('You chose %input', array('%input' => $form_state->getValue('choice'))));
  }
}
