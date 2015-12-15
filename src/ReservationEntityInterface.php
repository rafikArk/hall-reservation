<?php

/**
 * @file
 * Contains \Drupal\hall_reservation\ReservationEntityInterface.
 */

namespace Drupal\hall_reservation;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Hall Reservation entities.
 *
 * @ingroup hall_reservation
 */
interface ReservationEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
