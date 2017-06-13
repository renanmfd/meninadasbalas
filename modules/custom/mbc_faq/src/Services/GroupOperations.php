<?php

namespace Drupal\mbc_faq\Services;

use Drupal\Core\Database\Database;

/**
 * @class Overview
 */
class GroupOperations {

  public function get($group_id) {
    $result = &drupal_static(__FUNCTION__);
    if (!isset($result)) {
      $conn = Database::getConnection();
      $result = $conn->select('mbc_faq_group')
        ->condition('group_id', $group_id)
        ->execute()
        ->fetchAssoc();
    }
    return $result;
  }

  public function getName($group_id) {
    $group = $this->get($group_id);
    return $group['name'];
  }

  public function add($name) {
    $conn = Database::getConnection();
    $conn->insert('mbc_faq_group')->fields(['group' => $name])->execute();
  }

  public function edit($group_id, $name = '') {
    $conn = Database::getConnection();
    $conn->update('mbc_faq_group')
      ->fields(['group' => $name])
      ->condition('group_id', $group_id)
      ->execute();
  }

  public function delete($group_id) {
    $conn = Database::getConnection();
    $conn->delete('mbc_faq_group')
      ->condition('group_id', $group_id)
      ->execute();
  }

}
