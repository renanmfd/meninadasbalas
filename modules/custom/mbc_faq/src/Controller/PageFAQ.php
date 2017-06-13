<?php

namespace Drupal\mbc_faq\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * @class Overview
 */
class PageFAQ extends ControllerBase {

  protected function content() {
    return ['#markup' => 'FAQ page'];
  }

}
