<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class OneTimePayment
 * @package SuperadminBundle\Document
 * @ORM\Entity
 * @ORM\Table(name="superadmin_one_time_payments")
 */
class OneTimePayment extends AbstractEntity implements WageEntriesAware, ParametersAware
{
    use WageEntriesTrait, ParametersTrait;

    /**
     *
     * @ORM\OneToMany(targetEntity="WageEntry", mappedBy="oneTimePayment", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $wageEntries = [];

    /**
     *
     * @ORM\OneToMany(targetEntity="Parameter", mappedBy="oneTimePayment", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $parameters = [];
}