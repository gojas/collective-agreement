<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AllowedValue
 * @package SuperadminBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="superadmin_allowed_values")
 */
class AllowedValue extends AbstractEntity
{

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $description;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return AllowedValue
     */
    public function setName(string $name): AllowedValue
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return AllowedValue
     */
    public function setDescription(string $description = null): AllowedValue
    {
        $this->description = $description ?? '';
        return $this;
    }

}