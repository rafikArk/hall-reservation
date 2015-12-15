<?php

/**
 * @file
 * Contains \Drupal\hall_reservation\Tests\DefaultController.
 */

namespace Drupal\hall_reservation\Tests;

use Drupal\simpletest\WebTestBase;
use Drupal\Core\Routing\RequestContext;

/**
 * Provides automated tests for the hall_reservation module.
 */
class DefaultControllerTest extends WebTestBase {

  /**
   * Drupal\Core\Routing\RequestContext definition.
   *
   * @var Drupal\Core\Routing\RequestContext
   */
  protected $router_request_context;
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "hall_reservation DefaultController's controller functionality",
      'description' => 'Test Unit for module hall_reservation and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests hall_reservation functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module hall_reservation.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
