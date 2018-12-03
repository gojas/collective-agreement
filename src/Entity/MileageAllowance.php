<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class MileageAllowance
 * @package SuperadminBundle\Document
 * @ORM\Entity
 * @ORM\Table(name="superadmin_mileage_allowances")
 */
class MileageAllowance extends AbstractEntity implements WageEntriesAware, ParametersAware
{
    use WageEntriesTrait, ParametersTrait;

    /**
     *
     * @ORM\OneToMany(targetEntity="WageEntry", mappedBy="mileageAllowance", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $wageEntries = [];

    /**
     *
     * @ORM\OneToMany(targetEntity="Parameter", mappedBy="mileageAllowance", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $parameters = [];
}