<?php

/**
 * @file
 * Contains \Drupal\hall_reservation\Entity\Form\ReservationEntitySettingsForm.
 */

namespace Drupal\hall_reservation\Entity\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ReservationEntitySettingsForm.
 *
 * @package Drupal\hall_reservation\Form
 *
 * @ingroup hall_reservation
 */
class ReservationEntitySettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'ReservationEntity_settings';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }


  /**
   * Defines the settings form for Hall Reservation entities.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   Form definition array.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['ReservationEntity_settings']['#markup'] = 'Settings form for Hall Reservation entities. Manage field settings here.';
    return $form;
  }

}
