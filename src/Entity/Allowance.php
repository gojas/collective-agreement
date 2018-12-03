<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Allowance
 * @package SuperadminBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="superadmin_allowances")
 */
class Allowance extends AbstractEntity implements WageEntriesAware, WageGroupsAware, ParametersAware
{
    use WageEntriesTrait, WageGroupsTrait, ParametersTrait;

    /**
     *
     * @ORM\OneToMany(targetEntity="WageEntry", mappedBy="allowance", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $wageEntries = [];

    /**
     *
     * @ORM\OneToMany(targetEntity="WageGroup", mappedBy="allowance", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $wageGroups = [];

    /**
     *
     * @ORM\OneToMany(targetEntity="Parameter", mappedBy="allowance", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $parameters = [];
}