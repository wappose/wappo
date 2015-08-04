<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column bootstrap layout, main and right sidebar'),
  'category' => t('WAPPO layouts'),
  'icon' => 'bootstrap_mainandside.png',
  'theme' => 'bootstrap_mainandside',
  'css' => 'bootstrap_mainandside.css',
  'regions' => array(
    'main' => t('Main column'),
    'right' => t('Right sidebar')
   ),
);
