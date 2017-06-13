<?php

namespace Drupal\mbc_faq\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a form for performing a 1-click site backup.
 */
class AddFAQ extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mbc_faq_add';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = array();

    $form['mbc_faq_question'] = array(
      '#title' => $this->t('Upload a Backup File'),
      '#type' => 'textfield',
    );

    $form['mbc_faq_answer'] = array(
      '#title' => $this->t('Upload a Backup File'),
      '#type' => 'text_format',
    );

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
    
  }

}
