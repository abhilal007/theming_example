<?php

namespace Drupal\theming_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

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
    $options = [
      'newest_first' => t('Newest first'),
      'newest_last' => t('Newest last'),
      'edited_first' => t('Edited first'),
      'edited_last' => t('Edited last'),
      'by_name' => t('By name'),
    ];
    $form['choice'] = [
      '#type' => 'select',
      '#options' => $options,
      '#title' => t('Choose which ordering you want'),
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => t('Go'),
    ];
    return $form;
  }

  /**
   *
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message(t('You chose %input', ['%input' => $form_state->getValue('choice')]));
  }

}
