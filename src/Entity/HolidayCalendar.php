<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class HolidayCalendar
 * @package SuperadminBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="superadmin_holiday_calendars")
 */
class HolidayCalendar extends AbstractEntity implements ParametersAware, HolidaysAware
{
    use ParametersTrait, HolidaysTrait;

    /**
     *
     * @ORM\OneToMany(targetEntity="Holiday", mappedBy="holidayCalendar", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $holidays = [];

    /**
     *
     * @ORM\OneToMany(targetEntity="Parameter", mappedBy="holidayCalendar", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $parameters = [];
}