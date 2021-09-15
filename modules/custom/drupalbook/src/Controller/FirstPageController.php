<?php
namespace Drupal\drupalbook\Controller;
class FirstPageController {

  public function content() {
      $items = array('a1','a2','a3');
    return array(
      '#items' => $items,
      '#theme' => 'new_list',
      '#title' => 'Our item list',
    );
  }

}