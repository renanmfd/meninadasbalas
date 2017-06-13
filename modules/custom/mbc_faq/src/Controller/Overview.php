<?php

namespace Drupal\mbc_faq\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * @class Overview
 */
class Overview extends ControllerBase {

  public function faq_list() {
    return $this->build_list('faq_list', []);
  }

  public function faq_group_list() {
    return $this->build_list('faq_group_list', []);
  }

  protected function build_list($type, $elements) {
    return ['#markup' => $type];
  }

}
