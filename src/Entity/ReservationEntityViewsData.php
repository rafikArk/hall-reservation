<?php

/**
 * @file
 * Contains \Drupal\hall_reservation\Entity\ReservationEntity.
 */

namespace Drupal\hall_reservation\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Hall Reservation entities.
 */
class ReservationEntityViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['reservation_entity']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Hall Reservation'),
      'help' => $this->t('The Hall Reservation ID.'),
    );

    return $data;
  }

}
