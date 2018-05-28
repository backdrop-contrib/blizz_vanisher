<?php

namespace Drupal\blizz_vanisher\Service;

/**
 * Interface IframeVanisherInterface.
 *
 * @package Drupal\blizz_vanisher\Service
 */
interface IframeVanisherInterface {

  /**
   * Returns the name of the iframe.
   *
   * @return string
   *   The name of the iframe.
   */
  public function getIframeName();

  /**
   * Returns the privacy url of the iframe.
   *
   * @return string
   *   The privacy url.
   */
  public function getIframePrivacyUrl();

  /**
   * Returns an array with cookies.
   *
   * @return array
   *   The cookies.
   */
  public function getIframeCookies();

}
