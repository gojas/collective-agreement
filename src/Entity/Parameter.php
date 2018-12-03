<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Parameter
 * @package SuperadminBundle\Document
 *
 * @ORM\Entity
 * @ORM\Table(name="superadmin_parameters")
 */
class Parameter extends AbstractEntity
{

    const KEY_IS_LOCAL = 'isLocal';

    const KEY_IS_GLOBAL = 'isGlobal';

    const KET_IS_ENGINE_RELEVANT = 'isEngineRelevant';

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
    protected $type;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isLocal;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isGlobal;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $isEngineRelevant;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="AllowedValue", mappedBy="parameter", indexBy="id", fetch="EXTRA_LAZY")
     */
    protected $allowedValues;

    public function __construct()
    {
        $this->isGlobal = false;
        $this->isLocal = false;
        $this->isEngineRelevant = true;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Parameter
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Parameter
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLocal()
    {
        return $this->isLocal;
    }

    /**
     * @param bool $isLocal
     * @return Parameter
     */
    public function setIsLocal(bool $isLocal = null): Parameter
    {
        $this->isLocal = $isLocal;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGlobal()
    {
        return $this->isGlobal;
    }

    /**
     * @param bool $isGlobal
     * @return Parameter
     */
    public function setIsGlobal(bool $isGlobal = null): Parameter
    {
        $this->isGlobal = $isGlobal;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEngineRelevant()
    {
        return $this->isEngineRelevant;
    }

    /**
     * @param bool $isEngineRelevant
     * @return Parameter
     */
    public function setIsEngineRelevant(bool $isEngineRelevant = null): Parameter
    {
        $this->isEngineRelevant = $isEngineRelevant;
        return $this;
    }

}