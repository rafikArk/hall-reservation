<?php

/**
 * @file
 * Contains \Drupal\hall_reservation\ReservationEntityAccessControlHandler.
 */

namespace Drupal\hall_reservation;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Hall Reservation entity.
 *
 * @see \Drupal\hall_reservation\Entity\ReservationEntity.
 */
class ReservationEntityAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view hall reservation entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit hall reservation entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete hall reservation entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add hall reservation entities');
  }

}
