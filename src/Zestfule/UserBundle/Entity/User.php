<?php

namespace Zestfule\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface,
    Doctrine\ORM\Mapping as ORM,
    Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {

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

?>