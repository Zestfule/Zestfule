<?php

namespace Zestfule\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements UserInterface {

    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(name="id")
     * @ORM\Column(type="string")
     * @ORM\Column(length="255")
     * @ORM\Column(unique="true")
     */
    protected $email;

    /**
     * @ORM\Column(name="password")
     * @ORM\Column(type="string")
     * @ORM\Column(length="255")
     */
    protected $password;

}
