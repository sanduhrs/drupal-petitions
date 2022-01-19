<?php

namespace Drupal\stripe_campaign;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface defining a campaign entity type.
 */
interface CampaignInterface extends ContentEntityInterface {

  /**
   * Gets the campaign creation timestamp.
   *
   * @return int
   *   Creation timestamp of the campaign.
   */
  public function getCreatedTime();

  /**
   * Sets the campaign creation timestamp.
   *
   * @param int $timestamp
   *   The campaign creation timestamp.
   *
   * @return \Drupal\stripe_campaign\CampaignInterface
   *   The called campaign entity.
   */
  public function setCreatedTime($timestamp);

}
