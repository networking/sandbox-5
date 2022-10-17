<?php

namespace App\Entity;

use Networking\InitCmsBundle\Entity\BaseUser;
use Networking\InitCmsBundle\Entity\Group;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user_user")
 * @ORM\Entity()
 */
class User extends BaseUser{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var array
     * @ORM\Column(name="admin_settings", type="json", nullable=true)
     */
    protected $adminSettings;

    /**
     * @var array
     * @ORM\Column(name="locale", type="string", length=6, nullable=true)
     */
    protected $locale;

    /**
     * @var array
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    protected $firstname;

    /**
     * @var array
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    protected $lastname;

    /**
     * @var array
     * @ORM\Column(name="two_step_code", type="string", length=255, nullable=true)
     */
    protected $twoStepVerificationCode;

    /**
     * @var Group[]
     * @ORM\ManyToMany(targetEntity="Networking\InitCmsBundle\Entity\Group")
     * @ORM\JoinTable(name="user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id", onDelete="CASCADE")}
     *  )
     */
    protected $groups;

}
