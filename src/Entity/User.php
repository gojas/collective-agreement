<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="core_users")
 */
class User extends AbstractEntity
{

    /**
     * @var string Fully qualified name of the class for responses.
     */
    protected $fqn;

}
