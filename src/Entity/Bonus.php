<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Bonus
 * @package SuperadminBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="superadmin_bonuses")
 */
class Bonus extends AbstractEntity implements MaturitiesAware
{
    use MaturitiesTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description ?? '';
    }

    /**
     * @param string $description
     * @return Bonus
     */
    public function setDescription(string $description): Bonus
    {
        $this->description = $description;
        return $this;
    }
}