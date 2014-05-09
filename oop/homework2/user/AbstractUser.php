<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 08.05.14
 * Time: 10:09
 */

namespace homework_2\user;

use homework2\interfaces\HasAddressInterface;
use homework2\user\Address;

/**
 * Class AbstractUser
 * @package homework_2\user
 */
class AbstractUser implements HasAddressInterface
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $surName;
    /**
     * @var integer
     */
    private $phone;
    /**
     * @var string
     */
    private $email;
    /**
     * @var Address
     */
    private $address;

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $city
     * @param string $street
     * @param string $house
     */
    public function setAddress($city, $street, $house)
    {
        $this->address = new Address($city, $street, $house);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * @param string $surName
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
    }

    public function __construct($name, $email)
    {
        $this->setName($name);
        $this->setEmail($email);
    }
} 