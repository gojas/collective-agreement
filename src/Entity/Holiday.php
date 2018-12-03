<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Holiday
 * @package SuperadminBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="superadmin_holidays")
 */
class Holiday extends AbstractEntity implements ClassificationsAware
{
    use ClassificationsTrait;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="Classification", mappedBy="holiday", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $classifications;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $date;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $description;

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Holiday
     */
    public function setDate(\DateTime $date): Holiday
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Holiday
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Collection|array
     */
    public function getClassifications()
    {
        if($this->classifications instanceof Collection){
            return $this->classifications->toArray();
        }

        return $this->classifications ?? [];
    }
}