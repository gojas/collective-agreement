<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Surcharge
 * @ORM\Entity
 * @ORM\Table(name="superadmin_surcharges")
 */
class Surcharge extends AbstractEntity implements WageEntriesAware, WageGroupsAware, ParametersAware
{
    use WageEntriesTrait, WageGroupsTrait, ParametersTrait;

    /**
     *
     * @ORM\OneToMany(targetEntity="WageEntry", mappedBy="surcharge", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $wageEntries = [];

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="WageGroup", mappedBy="surcharge", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $wageGroups = [];

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="Parameter", mappedBy="surcharge", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $parameters = [];
}