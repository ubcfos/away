<?php
/**
 * @file
 * Drupal environment-specific configuration file.
 */

// Copy this to public/sites/default/settings.local.php

// Environment specific settings.
$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'away',
  'username' => 'root',
  'password' => 'root',
  'host' => '127.0.0.1',
);


$drupal_hash_salt = 'p89yasf8-Sdfsdyasdwkapdf8snadqKJHadasdpwqwe';

$cookie_domain = '.away.dev';
$base_url = 'https://away.dev';

/**
 * Reroute Email.
 */
$conf['reroute_email_enable'] = '1';
$conf['reroute_email_address'] = 'pittet@cs.ubc.ca';

/**
 * Logging Alerts.
 */
$conf['error_level'] = 2;
$conf['emaillog_0'] = '';
$conf['emaillog_1'] = '';
$conf['emaillog_2'] = '';
$conf['emaillog_3'] = '';
$conf['emaillog_4'] = '';
$conf['emaillog_5'] = '';
