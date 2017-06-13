<?php

namespace Drupal\mbc_faq\Services;

/**
 * @class Overview
 */
class FAQOperations {

  public function get() {
    return $this->build_list('faq_list', []);
  }

  public function getName() {
    return $this->build_list('faq_list', []);
  }
}
