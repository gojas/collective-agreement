<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

trait AuthorizableTrait
{

    /**
     * @var string
     *
     * @ORM\Column(name="allowed_roles", type="array")
     */
    protected $allowedRoles;

    /**
     * @var string
     *
     * @ORM\Column(name="permission_informations", type="array")
     */
    protected $permissionInformation;

    public function __construct()
    {
        $this->permissionInformation = [];
        $this->allowedRoles = [];
    }

}