<?php

namespace Drupal\theming_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 *
 */
class ThemingExampleTextForm extends FormBase {

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
    $form['text'] = [
      '#type' => 'textfield',
      '#title' => t('Please input something!'),
      '#required' => TRUE,
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
  public function submitForm(array $form, FormStateInterface $form_state) {
    drupal_set_message(t('You entered %input', ['%input' => $form_state->getValue('text')]));
  }

}
