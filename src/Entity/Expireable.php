<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interface Expireable
 * @package Entity
 */
interface Expireable
{
    /**
     * @return \DateTime|null
     */
    public function getValidFrom(): ?\DateTime;

    /**
     * @param \DateTime|null $validFrom
     * @return Expireable
     */
    public function setValidFrom(?\DateTime $validFrom): Expireable;

    /**
     * @return \DateTime|null
     */
    public function getValidTo(): ?\DateTime;

    /**
     * @param \DateTime|null $validTo
     * @return Expireable
     */
    public function setValidTo(?\DateTime $validTo): Expireable;

    /**
     * @return bool
     */
    public function getHasExpired(): bool;
}