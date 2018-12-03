<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Classification
 * @package SuperadminBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="superadmin_classifications")
 */
class Classification extends AbstractEntity implements ConditionsAware
{
    use ConditionsTrait;

    /**
     *
     * @ORM\OneToMany(targetEntity="Condition", mappedBy="classification", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $conditions;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $salaryType;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", nullable=true)
     */
    protected $factor;

    /**
     * @return string
     */
    public function getName(): string
    {
        return (string)$this->name;
    }

    /**
     * @param string $name
     * @return Classification
     */
    public function setName(?string $name): Classification
    {
        $this->name = (string)$name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalaryType(): string
    {
        return $this->salaryType;
    }

    /**
     * @param string $salaryType
     * @return Classification
     */
    public function setSalaryType(string $salaryType): Classification
    {
        $this->salaryType = $salaryType;
        return $this;
    }

    /**
     * @return float
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * @param float $factor
     * @return Classification
     */
    public function setFactor(float $factor = null): Classification
    {
        $this->factor = $factor;
        return $this;
    }

}
