<?php

/**
 * A drupal alias file example.
 *
 * @file
 *
 * PHP Version 7.0.0
 *
 */

$home = drush_server_home();

$aliases['local'] = array(
  'env' => 'dev',
  'root' => '/Users/rallen/clones/lexrants.me/web',
  'uri' => 'http://127.0.0.1:8888',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
    '%drush-script' => '../vendor/bin/drush',
  )
);

$aliases['live'] = array(
  'env' => 'dev',
  'root' => '/var/www/lexrants.me/web',
  'uri' => 'https://lexrants.me',
  'remote-user' => 'root',
  'remote-host' => 'lexrants.me',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
    '%drush-script' => '/var/www/lexrants.me/vendor/bin/drush',
  )
);