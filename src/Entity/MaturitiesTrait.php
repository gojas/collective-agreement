<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

trait MaturitiesTrait
{
    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="Maturity", mappedBy="bonus", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $maturities = [];
}