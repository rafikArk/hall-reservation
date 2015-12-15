<?php

/**
 * @file
 * Contains \Drupal\hall_reservation\Controller\DefaultController.
 */

namespace Drupal\hall_reservation\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Routing\RequestContext;

/**
 * Class DefaultController.
 *
 * @package Drupal\hall_reservation\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Drupal\Core\Routing\RequestContext definition.
   *
   * @var Drupal\Core\Routing\RequestContext
   */
  protected $router_request_context;
  /**
   * {@inheritdoc}
   */
  public function __construct(RequestContext $router_request_context) {
    $this->router_request_context = $router_request_context;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.request_context')
    );
  }

  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Implement method: index')
    ];
  }

}
