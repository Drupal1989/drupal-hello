<?php

use Drupal\Core\Routing\RouteMatchInterface;

/**
* Implements hook_help().
*/

function hello_world_help($route_name, RouteMatchInterface $route_match) {
  switch ($route_name) {
    case 'help.page.hello_world':
      $output = '';
      $output .= '<h3>' . t('About') . </h3>;
      $output .= '<p>' . t('This is example...') . '</p>';
      return $output;

    default:
}
}
