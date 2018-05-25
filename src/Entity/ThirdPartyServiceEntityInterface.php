<?php

namespace Drupal\blizz_vanisher\Entity;


/**
 * Interface ThirdPartyServiceEntityInterface.
 *
 * @package Drupal\blizz_vanisher\Entity
 */
interface ThirdPartyServiceEntityInterface {

  /**
   * Returns the entity id.
   *
   * @return string
   *   The entity id.
   */
  public function getId();

  /**
   * Returns the label.
   *
   * @return string
   *   The label.
   */
  public function getLabel();

  /**
   * Returns the name.
   *
   * @return string
   *   The name.
   */
  public function getName();

  /**
   * Returns the info content.
   *
   * @return string
   *   The info content.
   */
  public function getInfo();

  /**
   * Returns whether the service will be controlled or not.
   *
   * @return bool
   *   TRUE when control is activated, otherwise FALSE.
   */
  public function isEnabled();

  /**
   * Returns the name of the vanisher to use.
   *
   * @return string
   *   The name of the vanisher.
   */
  public function getVanisher();

}