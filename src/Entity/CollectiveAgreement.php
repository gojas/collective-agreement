<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CollectiveAgreement
 *
 * @ORM\Entity
 * @ORM\Table(name="supreadmin_collective_agreements")
 */
class CollectiveAgreement extends AbstractEntity implements Authorizable, Expireable
{
    use ExpireableTrait, AuthorizableTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $externalId;

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
    protected $url;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $checkSum;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", nullable=true)
     */
    protected $normalWorkingHours;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", nullable=true)
     */
    protected $standardHoursDivider;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", nullable=true)
     */
    protected $overtimeHoursDivider;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isForWorkpersons;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isForEmployees;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isForPersonnelLeasing = false;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $synced;

    /**
     * @var HolidayCalendar
     *
     * @ORM\ManyToOne(targetEntity="HolidayCalendar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="holiday_calendar_id", referencedColumnName="id")
     * })
     */
    protected $holidayCalendar;

    /**
     * @var Salary
     *
     * @ORM\ManyToOne(targetEntity="Salary")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="salary_id", referencedColumnName="id")
     * })
     */
    protected $salary;

    /**
     * @var Surcharge
     *
     * @ORM\ManyToOne(targetEntity="Surcharge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="surcharge_id", referencedColumnName="id")
     * })
     */
    protected $surcharge;

    /**
     * @var Allowance
     *
     * @ORM\ManyToOne(targetEntity="Allowance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allowance_id", referencedColumnName="id")
     * })
     */
    protected $allowance;

    /**
     * @var OneTimePayment
     *
     * @ORM\ManyToOne(targetEntity="OneTimePayment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="one_time_payment_id", referencedColumnName="id")
     * })
     */
    protected $oneTimePayment;

    /**
     * @var MileageAllowance
     *
     * @ORM\ManyToOne(targetEntity="MileageAllowance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mileage_allowance_id", referencedColumnName="id")
     * })
     */
    protected $mileageAllowance;

    /**
     * @var Remuneration
     *
     * @ORM\ManyToOne(targetEntity="Remuneration")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="remuneration_id", referencedColumnName="id")
     * })
     */
    protected $remuneration;

    /**
     * @var Bonus
     *
     * @ORM\ManyToOne(targetEntity="Bonus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="holiday_allowance_id", referencedColumnName="id")
     * })
     */
    protected $holidayAllowance;

    /**
     * @var Bonus
     *
     * @ORM\ManyToOne(targetEntity="Bonus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="christmas_allowance_id", referencedColumnName="id")
     * })
     */
    protected $christmasAllowance;

    /**
     * @var CollectiveAgreement
     *
     * @ORM\ManyToOne(targetEntity="CollectiveAgreement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="original_id", referencedColumnName="id")
     * })
     */
    protected $original;

    public function createSubDocuments()
    {
        $this->setHolidayCalendar(new HolidayCalendar());
        $this->setSalary(new Salary());
        $this->setSurcharge(new Surcharge());
        $this->setAllowance(new Allowance());
        $this->setOneTimePayment(new OneTimePayment());
        $this->setMileageAllowance(new MileageAllowance());
        $this->setRemuneration(new Remuneration());
        $this->setHolidayAllowance(new Bonus());
        $this->setChristmasAllowance(new Bonus());
    }

    /**
     * @return null|string
     */
    public function getExternalId(): string
    {
        return (string)$this->externalId;
    }

    /**
     * @param string $externalId
     * @return CollectiveAgreement
     */
    public function setExternalId(?string $externalId): CollectiveAgreement
    {
        $this->externalId = (string)$externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return (string)$this->name;
    }

    /**
     * @param string $name
     * @return CollectiveAgreement
     */
    public function setName(?string $name): CollectiveAgreement
    {
        $this->name = (string)$name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return (string)$this->url;
    }

    /**
     * @param string $url
     * @return CollectiveAgreement
     */
    public function setUrl(?string $url): CollectiveAgreement
    {
        $this->url = (string)$url;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckSum(): string
    {
        return (string)$this->checkSum;
    }

    /**
     * @param string $checkSum
     * @return CollectiveAgreement
     */
    public function setCheckSum(?string $checkSum): CollectiveAgreement
    {
        $this->checkSum = (string)$checkSum;
        return $this;
    }

    /**
     * @return double
     */
    public function getNormalWorkingHours(): float
    {
        return (float)$this->normalWorkingHours;
    }

    /**
     * @param double $normalWorkingHours
     * @return CollectiveAgreement
     */
    public function setNormalWorkingHours(?float $normalWorkingHours): CollectiveAgreement
    {
        $this->normalWorkingHours = (float)$normalWorkingHours;
        return $this;
    }

    /**
     * @return double
     */
    public function getStandardHoursDivider(): float
    {
        return (float)$this->standardHoursDivider;
    }

    /**
     * @param double $standardHoursDivider
     * @return CollectiveAgreement
     */
    public function setStandardHoursDivider(?float $standardHoursDivider): CollectiveAgreement
    {
        $this->standardHoursDivider = (float)$standardHoursDivider;
        return $this;
    }

    /**
     * @return double
     */
    public function getOvertimeHoursDivider(): float
    {
        return (float)$this->overtimeHoursDivider;
    }

    /**
     * @param double $overtimeHoursDivider
     * @return CollectiveAgreement
     */
    public function setOvertimeHoursDivider(?float $overtimeHoursDivider): CollectiveAgreement
    {
        $this->overtimeHoursDivider = (float)$overtimeHoursDivider;
        return $this;
    }

    /**
     * @return bool
     */
    public function isForWorkpersons(): bool
    {
        return (bool)$this->isForWorkpersons;
    }

    /**
     * @param bool $isForWorkpersons
     * @return CollectiveAgreement
     */
    public function setIsForWorkpersons(?bool $isForWorkpersons): CollectiveAgreement
    {
        $this->isForWorkpersons = (bool)$isForWorkpersons;
        return $this;
    }

    /**
     * @return bool
     */
    public function isForEmployees(): bool
    {
        return (bool)$this->isForEmployees;
    }

    /**
     * @param bool $isForEmployees
     * @return CollectiveAgreement
     */
    public function setIsForEmployees(?bool $isForEmployees): CollectiveAgreement
    {
        $this->isForEmployees = (bool)$isForEmployees;
        return $this;
    }

    /**
     * @return bool
     */
    public function isForPersonnelLeasing(): bool
    {
        return (bool)$this->isForPersonnelLeasing;
    }

    /**
     * @param bool $isForPersonnelLeasing
     * @return CollectiveAgreement
     */
    public function setIsForPersonnelLeasing(?bool $isForPersonnelLeasing): CollectiveAgreement
    {
        $this->isForPersonnelLeasing = (bool)$isForPersonnelLeasing;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSynced(): bool
    {
        return (bool)$this->synced;
    }

    /**
     * @param bool $synced
     * @return CollectiveAgreement
     */
    public function setSynced(bool $synced): CollectiveAgreement
    {
        $this->synced = $synced;
        return $this;
    }

    /**
     * @return null|\SuperadminBundle\Document\HolidayCalendar
     */
    public function getHolidayCalendar(): ?HolidayCalendar
    {
        return $this->holidayCalendar;
    }

    /**
     * @param \SuperadminBundle\Document\HolidayCalendar $holidayCalendar
     * @return CollectiveAgreement
     */
    public function setHolidayCalendar(HolidayCalendar $holidayCalendar): CollectiveAgreement
    {
        $this->holidayCalendar = $holidayCalendar;
        $this->holidayCalendar->setParent($this);
        return $this;
    }

    /**
     * @return CollectiveAgreement
     */
    public function removeHolidayCalendar(): CollectiveAgreement
    {
        $this->holidayCalendar = null;
        return $this;
    }

    /**
     * @return null|Salary
     */
    public function getSalary(): ?Salary
    {
        return $this->salary;
    }

    /**
     * @param Salary $salary
     * @return CollectiveAgreement
     */
    public function setSalary(Salary $salary): CollectiveAgreement
    {
        $this->salary = $salary;
        $this->salary->setParent($this);
        return $this;
    }

    /**
     * @return CollectiveAgreement
     */
    public function removeSalary(): CollectiveAgreement
    {
        $this->salary = null;
        return $this;
    }

    /**
     * @return Surcharge
     */
    public function getSurcharge(): ?Surcharge
    {
        return $this->surcharge;
    }

    /**
     * @param Surcharge $surcharge
     * @return CollectiveAgreement
     */
    public function setSurcharge(Surcharge $surcharge): CollectiveAgreement
    {
        $this->surcharge = $surcharge;
        $this->surcharge->setParent($this);
        return $this;
    }

    /**
     * @return CollectiveAgreement
     */
    public function removeAllowance(): CollectiveAgreement
    {
        $this->allowance = null;
        return $this;
    }

    /**
     * @return Allowance
     */
    public function getAllowance(): ?Allowance
    {
        return $this->allowance;
    }

    /**
     * @param Allowance $allowance
     * @return CollectiveAgreement
     */
    public function setAllowance(Allowance $allowance): CollectiveAgreement
    {
        $this->allowance = $allowance;
        $this->allowance->setParent($this);
        return $this;
    }


    /**
     * @return CollectiveAgreement
     */
    public function removeOneTimePayment(): CollectiveAgreement
    {
        $this->oneTimePayment = null;
        return $this;
    }

    /**
     * @return OneTimePayment
     */
    public function getOneTimePayment(): ?OneTimePayment
    {
        return $this->oneTimePayment;
    }

    /**
     * @param OneTimePayment $oneTimePayment
     * @return CollectiveAgreement
     */
    public function setOneTimePayment(OneTimePayment $oneTimePayment): CollectiveAgreement
    {
        $this->oneTimePayment = $oneTimePayment;
        $this->oneTimePayment->setParent($this);
        return $this;
    }

    /**
     * @return CollectiveAgreement
     */
    public function removeMileageAllowance(): CollectiveAgreement
    {
        $this->mileageAllowance = null;
        return $this;
    }

    /**
     * @return MileageAllowance
     */
    public function getMileageAllowance(): ?MileageAllowance
    {
        return $this->mileageAllowance;
    }

    /**
     * @param MileageAllowance $mileageAllowance
     * @return CollectiveAgreement
     */
    public function setMileageAllowance(MileageAllowance $mileageAllowance): CollectiveAgreement
    {
        $this->mileageAllowance = $mileageAllowance;
        $this->mileageAllowance->setParent($this);
        return $this;
    }

    /**
     * @return CollectiveAgreement
     */
    public function removeRemuneration(): CollectiveAgreement
    {
        $this->remuneration = null;
        return $this;
    }

    /**
     * @return Remuneration
     */
    public function getRemuneration(): ?Remuneration
    {
        return $this->remuneration;
    }

    /**
     * @param Remuneration $remuneration
     * @return CollectiveAgreement
     */
    public function setRemuneration(Remuneration $remuneration): CollectiveAgreement
    {
        $this->remuneration = $remuneration;
        $this->remuneration->setParent($this);
        return $this;
    }

    /**
     * @return CollectiveAgreement
     */
    public function removeChristmasAllowance(): CollectiveAgreement
    {
        $this->christmasAllowance = null;
        return $this;
    }

    /**
     * @return Bonus
     */
    public function getChristmasAllowance(): ?Bonus
    {
        return $this->christmasAllowance;
    }

    /**
     * @param Bonus $christmasAllowance
     * @return CollectiveAgreement
     */
    public function setChristmasAllowance(Bonus $christmasAllowance): CollectiveAgreement
    {
        $this->christmasAllowance = $christmasAllowance;
        $this->christmasAllowance->setParent($this);
        return $this;
    }

    /**
     * @return CollectiveAgreement
     */
    public function removeHolidayAllowance(): CollectiveAgreement
    {
        $this->holidayAllowance = null;
        return $this;
    }

    /**
     * @return Bonus
     */
    public function getHolidayAllowance(): ?Bonus
    {
        return $this->holidayAllowance;
    }

    /**
     * @param Bonus $holidayAllowance
     * @return CollectiveAgreement
     */
    public function setHolidayAllowance(Bonus $holidayAllowance): CollectiveAgreement
    {
        $this->holidayAllowance = $holidayAllowance;
        $this->holidayAllowance->setParent($this);
        return $this;
    }

    /**
     * @return CollectiveAgreement
     */
    public function getOriginal(): ?CollectiveAgreement
    {
        return $this->original;
    }

    /**
     * @param CollectiveAgreement $original
     * @return CollectiveAgreement
     */
    public function setOriginal(?CollectiveAgreement $original): ?CollectiveAgreement
    {
        $this->original = $original;
        return $this;
    }

    /**
     * @return array
     */
    public function getCacheKeys(): array
    {
        return [
            'parameter.default.values',
        ];
    }
}
