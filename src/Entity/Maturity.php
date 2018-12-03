<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Maturity
 * @package SuperadminBundle\Document
 *
 * @ORM\Entity
 * @ORM\Table(name="superadmin_maturities")
 */
class Maturity extends AbstractEntity
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $accountingMonth;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $referenceMonth;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", nullable=true)
     */
    protected $ratio;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isVariable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $till;

    /**
     * @return string
     */
    public function getAccountingMonth(): string
    {
        return $this->accountingMonth;
    }

    /**
     * @param string $accountingMonth
     * @return Maturity
     */
    public function setAccountingMonth(string $accountingMonth)
    {
        $this->accountingMonth = $accountingMonth;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceMonth(): string
    {
        return $this->referenceMonth;
    }

    /**
     * @param string $referenceMonth
     * @return Maturity
     */
    public function setReferenceMonth(string $referenceMonth): Maturity
    {
        $this->referenceMonth = $referenceMonth;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * @param mixed $ratio
     * @return Maturity
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsVariable()
    {
        return $this->isVariable;
    }

    /**
     * @param mixed $isVariable
     * @return Maturity
     */
    public function setIsVariable($isVariable)
    {
        $this->isVariable = $isVariable;
        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getTill()
    {
        return $this->till;
    }

    /**
     * @param \DateTimeInterface|null $till
     * @return Maturity
     */
    public function setTill(\DateTimeInterface $till = null): Maturity
    {
        $this->till = $till;
        return $this;
    }

}