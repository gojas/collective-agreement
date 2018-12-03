<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class WageGroup
 * @package SuperadminBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="superadmin_wage_groups")
 */
class WageGroup extends AbstractEntity implements WageEntriesAware
{
    use WageEntriesTrait;

    const HIGHEST_MODE = 'heighest';
    const HIGHEST_TWO_MODE = 'heighest_two';

    /**
     *
     * @ORM\OneToMany(targetEntity="WageEntry", mappedBy="wageGroup", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $wageEntries = [];

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
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $groupMode;
    /**
     * @return string
     */
    public function getName(): string
    {
        return (string)$this->name;
    }

    /**
     * @param string $name
     * @return WageGroup
     */
    public function setName(?string $name): ?WageGroup
    {
        $this->name = (string)$name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string)$this->description;
    }

    /**
     * @param string $description
     * @return WageGroup
     */
    public function setDescription(string $description): WageGroup
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupMode(): string
    {
        return (string)$this->groupMode;
    }

    /**
     * @param mixed $groupMode
     * @return WageGroup
     */
    public function setGroupMode(string $groupMode): WageGroup
    {
        $this->groupMode = $groupMode;
        return $this;
    }
}