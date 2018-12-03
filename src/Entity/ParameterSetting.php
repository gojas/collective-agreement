<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="superadmin_parameter_settings")
 */
class ParameterSetting extends AbstractEntity implements Authorizable, Expireable
{
    use ExpireableTrait, AuthorizableTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $name;

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

    public function __construct()
    {
        $this->isGlobal = false;
        $this->isLocal = false;
        $this->isEngineRelevant = true;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ParameterSetting
     */
    public function setName(string $name = null): ParameterSetting
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLocal(): bool
    {
        return $this->isLocal;
    }

    /**
     * @param bool $isLocal
     * @return ParameterSetting
     */
    public function setIsLocal(bool $isLocal = null): ParameterSetting
    {
        $this->isLocal = $isLocal;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGlobal(): bool
    {
        return $this->isGlobal;
    }

    /**
     * @param bool $isGlobal
     * @return ParameterSetting
     */
    public function setIsGlobal(bool $isGlobal = null): ParameterSetting
    {
        $this->isGlobal = $isGlobal;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEngineRelevant(): bool
    {
        return $this->isEngineRelevant;
    }

    /**
     * @param bool $isEngineRelevant
     * @return ParameterSetting
     */
    public function setIsEngineRelevant(bool $isEngineRelevant = null): ParameterSetting
    {
        $this->isEngineRelevant = $isEngineRelevant;
        return $this;
    }

}
