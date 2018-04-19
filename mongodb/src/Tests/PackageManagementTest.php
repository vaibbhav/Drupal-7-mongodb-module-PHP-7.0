<?php

/**
 * @file
 * Contains Class PackageManagementTest.
 *
 * This test is about install/enable/disable/uninstall operations.
 */

namespace Drupal\mongodb\Tests;


/**
 * Test package management hooks.
 *
 * @package Drupal\mongodb
 *
 * @group MongoDB: Base
 */
class PackageManagementTest extends \DrupalWebTestCase {
  const MODULE = 'mongodb';

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => 'MongoDB package management test',
      'description' => 'install/enable/disable/uninstall operations.',
      'group' => 'MongoDB: Base'
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    // Support using the MongoDB cache.
    drupal_flush_all_caches();
    parent::setUp();
  }

  /**
   * {@inheritdoc}
   */
  public function tearDown() {
    // Support using the MongoDB cache.
    drupal_flush_all_caches();
    parent::tearDown();
  }

  /**
   * Test successful execution of hook_requirements() during install/enable.
   *
   * Function module_enable() does not check requirements, unlike normal
   * enabling, so we need to invoke the hook manually to simulate it.
   */
  public function testEnable() {
    module_load_install(static::MODULE);
    module_invoke(static::MODULE, 'requirements', 'install');
    module_enable([static::MODULE], FALSE);
    $this->pass('Successfully enabled mongodb.module.');
  }

}
