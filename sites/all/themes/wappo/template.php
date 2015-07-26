<?php

function wappo_preprocess_image(&$variables) {
  $attributes = &$variables['attributes'];
  foreach (array('width', 'height') as $key) {
    unset($attributes[$key]);
    unset($variables[$key]);
  }
}

function wappo_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];
    if (!empty($breadcrumb)) {
        $crumbs = '<ol class="breadcrumb">';
        foreach($breadcrumb as $value) {
            $crumbs .= '<li>'.$value.'</li>';
        }
        $crumbs .= '<li>'.drupal_get_title().'</li>';
        $crumbs .= '</ol>';
    }
    return $crumbs;
}
