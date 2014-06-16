<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 6/15/14
 * Time: 12:59 PM
 */

namespace BionicUniversity\UserBundle\Form\Model;

use BionicUniversity\UserBundle\Entity\User;

class Registration
{
    /**
     * @var User
     */
    protected $user;

    /**
     * @var boolean
     */
    protected $termsAccepted;

    /**
     * @param boolean $termsAccepted
     */
    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (Boolean) $termsAccepted;
    }

    /**
     * @return boolean
     */
    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    /**
     * @param \BionicUniversity\UserBundle\Entity\User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return \BionicUniversity\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
} 