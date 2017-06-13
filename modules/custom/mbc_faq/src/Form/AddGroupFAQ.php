<?php

namespace Drupal\mbc_faq\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a form for performing a 1-click site backup.
 */
class AddGroupFAQ extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mbc_group_faq_add';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = [];

    $form['group_fieldset'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Add group'),
    ];
    $form['group_fieldset']['group_name'] = [
      '#title' => $this->t('Name'),
      '#type' => 'textfield',
      '#required' => TRUE,
    ];
    $form['group_fieldset']['actions'] = [
      'submit' => [
        '#type' => 'submit',
        '#value' => $this->t('Save'),
        '#button_type' => 'primary',
      ]
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $group = \Drupal::service('mbc_faq.group_operations');
    $group->add($form_state->getValue('group_name'));
    drupal_set_message($this->t('Group created'));
  }

}
