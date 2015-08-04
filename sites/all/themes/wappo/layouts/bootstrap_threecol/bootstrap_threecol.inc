<?php

// Plugin definition
$plugin = array(
  'title' => t('Three column bootstrap layout'),
  'category' => t('WAPPO layouts'),
  'icon' => 'bootstrap_threecol.png',
  'theme' => 'bootstrap_threecol',
  'css' => 'bootstrap_threecol.css',
  'regions' => array(
    'left' => t('Left side'),
    'middle' => t('Middle column'),
    'right' => t('Right side')
   ),
);
