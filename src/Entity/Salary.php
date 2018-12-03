<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Salary
 * @package SuperadminBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="superadmin_salaries")
 */
class Salary extends AbstractEntity implements WageEntriesAware, ParametersAware
{
    use WageEntriesTrait, ParametersTrait;

    /**
     *
     * @ORM\OneToMany(targetEntity="WageEntry", mappedBy="salary", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $wageEntries = [];

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="Parameter", mappedBy="salary", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $parameters = [];
}