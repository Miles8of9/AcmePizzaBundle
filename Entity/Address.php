<?php

namespace Acme\PizzaBundle\Entity;

/**
 * @orm:Entity
 */
class Address
{
    /**
     * @orm:GeneratedValue
     * @orm:Id
     * @orm:Column(type="integer")
     */
    private $id;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="Address")
     */
    private $name;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="Address")
     */
    private $street;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="Address")
     */
    private $city;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="Address")
     */
    private $phone;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}