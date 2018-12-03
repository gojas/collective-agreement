<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class WageEntry
 * @package SuperadminBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="superadmin_wage_entries")
 */
class WageEntry extends AbstractEntity implements ConditionsAware
{
    use ConditionsTrait;

    /**
     *
     * @ORM\OneToMany(targetEntity="Condition", mappedBy="wageEntry", indexBy="id", fetch="EXTRA_LAZY")
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $peerGroup;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", nullable=true)
     */
    protected $factor;

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
    protected $amount;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", nullable=true)
     */
    protected $quantity;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $unit;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isHourly;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isDaily;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isWeekly;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isMonthly;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return (string)$this->name;
    }

    /**
     * @param string $name
     * @return WageEntry
     */
    public function setName(?string $name): ?WageEntry
    {
        $this->name = (string)$name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return (string)$this->description;
    }

    /**
     * @param string $description
     * @return WageEntry
     */
    public function setDescription(?string $description): ?WageEntry
    {
        $this->description = (string)$description;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeerGroup(): ?string
    {
        return (string)$this->peerGroup;
    }

    /**
     * @param string $peerGroup
     * @return WageEntry
     */
    public function setPeerGroup(?string $peerGroup): ?WageEntry
    {
        $this->peerGroup = (string)$peerGroup;
        return $this;
    }

    /**
     * @return float
     */
    public function getFactor(): ?float
    {
        return (float)$this->factor;
    }

    /**
     * @param float $factor
     * @return WageEntry
     */
    public function setFactor(?float $factor): ?WageEntry
    {
        $this->factor = (float)$factor;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalaryType(): ?string
    {
        return (string)$this->salaryType;
    }

    /**
     * @param string $salaryType
     * @return WageEntry
     */
    public function setSalaryType(?string $salaryType): ?WageEntry
    {
        $this->salaryType = (string)$salaryType;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return (float)$this->amount;
    }

    /**
     * @param float $amount
     * @return WageEntry
     */
    public function setAmount(?float $amount): ?WageEntry
    {
        $this->amount = (float)$amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): ?float
    {
        return (float)$this->quantity;
    }

    /**
     * @param float $quantity
     * @return WageEntry
     */
    public function setQuantity(?float $quantity): ?WageEntry
    {
        $this->quantity = (float)$quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): ?string
    {
        return (string)$this->unit;
    }

    /**
     * @param string $unit
     * @return WageEntry
     */
    public function setUnit(?string $unit): ?WageEntry
    {
        $this->unit = (string)$unit;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHourly(): bool
    {
        return (bool)$this->isHourly;
    }

    /**
     * @param bool $isHourly
     * @return WageEntry
     */
    public function setIsHourly(?bool $isHourly): ?WageEntry
    {
        $this->isHourly = (bool)$isHourly;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDaily(): bool
    {
        return (bool)$this->isDaily;
    }

    /**
     * @param bool $isDaily
     * @return WageEntry
     */
    public function setIsDaily(bool $isDaily): WageEntry
    {
        $this->isDaily = $isDaily;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWeekly(): bool
    {
        return (bool)$this->isWeekly;
    }

    /**
     * @param bool $isWeekly
     * @return WageEntry
     */
    public function setIsWeekly(?bool $isWeekly): ?WageEntry
    {
        $this->isWeekly = (bool)$isWeekly;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMonthly(): bool
    {
        return (bool)$this->isMonthly;
    }

    /**
     * @param bool $isMonthly
     * @return WageEntry
     */
    public function setIsMonthly(?bool $isMonthly): ?WageEntry
    {
        $this->isMonthly = (bool)$isMonthly;
        return $this;
    }

}
