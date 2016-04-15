<?php
/**
 * @file
 * away_features.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function away_features_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'features_default_export_path';
  $strongarm->value = 'sites/all/modules/custom';
  $export['features_default_export_path'] = $strongarm;

  return $export;
}
