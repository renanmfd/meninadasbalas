<?php

namespace Drupal\mbc_faq\Form;

use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class DeleteFAQ extends ConfirmFormBase {

  /**
   * @var String
   */
  var $faq_id;

  /**
   * Returns the question to ask the user.
   *
   * @return string
   *   The form question. The page title will be set to this value.
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to delete this FAQ Question & Answer?');
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    $faq = \Drupal::service('mbc_faq.faq_operations');
    return $this->t('This will permanently remove %faq_id from %faq_name.',
      [
        '%faq_id' => $this->faq_id,
        '%faq_name' => $faq->getName($this->faq_id)
      ]
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return $this->t('Delete');
  }

  /**
   * Returns the route to go to if the user cancels the action.
   *
   * @return \Drupal\Core\Url
   *   A URL object.
   */
  public function getCancelUrl() {
    return Url::fromRoute('mbc_faq.description');
  }

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'mbc_faq_delete_confirm';
  }

  public function buildForm(array $form, FormStateInterface $form_state, $faq_id = NULL) {
    $this->faq_id = $faq_id;

    return parent::buildForm($form, $form_state);
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $faq = \Drupal::service('mbc_faq.faq_operations');
    $faq->delete($this->faq_id);
    $form_state->setRedirectUrl($this->getCancelUrl());
  }

}
