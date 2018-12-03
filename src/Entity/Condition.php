<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Condition
 * @package SuperadminBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="superadmin_conditions")
 */
class Condition extends AbstractEntity
{

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $parameter;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $comparator;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $value;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="Condition", mappedBy="condition", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $orConditions;

    /**
     * @return string
     */
    public function getParameter()
    {
        return !empty($this->parameter) ? $this->parameter : 'Oder';
    }

    /**
     * @param string $parameter
     * @return Condition
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * @return string
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * @param string $comparator
     * @return Condition
     */
    public function setComparator($comparator)
    {
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return Condition
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}