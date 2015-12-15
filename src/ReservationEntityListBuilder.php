<?php

/**
 * @file
 * Contains \Drupal\hall_reservation\ReservationEntityListBuilder.
 */

namespace Drupal\hall_reservation;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Hall Reservation entities.
 *
 * @ingroup hall_reservation
 */
class ReservationEntityListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Hall Reservation ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\hall_reservation\Entity\ReservationEntity */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $this->getLabel($entity),
      new Url(
        'entity.reservation_entity.edit_form', array(
          'reservation_entity' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
