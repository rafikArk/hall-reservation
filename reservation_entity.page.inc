<?php

/**
 * @file
 * Contains reservation_entity.page.inc..
 *
 * Page callback for Hall Reservation entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Hall Reservation templates.
 *
 * Default template: reservation_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_reservation_entity(array &$variables) {
  // Fetch ReservationEntity Entity Object.
  $reservation_entity = $variables['elements']['#reservation_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
