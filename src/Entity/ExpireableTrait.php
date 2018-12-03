<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

trait ExpireableTrait
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_from", type="datetime", nullable=true)
     */
    protected $validFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_to", type="datetime", nullable=true)
     */
    protected $validTo;

    /**
     * @return \DateTime|null
     */
    public function getValidFrom(): ?\DateTime
    {
        return $this->validFrom;
    }

    /**
     * @param \DateTime|null $validFrom
     * @return Expireable
     */
    public function setValidFrom(?\DateTime $validFrom): Expireable
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getValidTo(): ?\DateTime
    {
        return $this->validTo;
    }

    /**
     * @param \DateTime|null $validTo
     * @return Expireable
     */
    public function setValidTo(?\DateTime $validTo): Expireable
    {
        $this->validTo = $validTo;
        return $this;
    }


    public function getHasExpired(): bool
    {
        return ($this->validTo) ? $this->validTo < new \DateTime() : false;
    }
}