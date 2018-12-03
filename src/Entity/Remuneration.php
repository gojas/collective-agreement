<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Remuneration
 * @ORM\Entity
 * @ORM\Table(name="superadmin_remunerations")
 */
class Remuneration extends AbstractEntity implements WageEntriesAware, ParametersAware
{
    use WageEntriesTrait, ParametersTrait;

    /**
     *
     * @ORM\OneToMany(targetEntity="WageEntry", mappedBy="remuneration", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $wageEntries = [];

    /**
     *
     * @ORM\OneToMany(targetEntity="Parameter", mappedBy="remuneration", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $parameters = [];
}