<?php

abstract class Item
{
    private $name = 'Unknown';
    private $weight = 0;

    function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    // akcesor (getter), mutator (setter)
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}

class Juice extends Item
{
    private $liters;

    function __construct($name, $weight, $liters)
    {
        parent::__construct($name, $weight);
        $this->liters = $liters;
    }

    public function getLiters()
    {
        return $this->liters;
    }

    public function setLiters($liters)
    {
        $this->liters = $liters;
    }
}

class Platon extends Item
{
    private $dateBirth;

    function __construct($name, $weight, $dateBirth) {
        parent::__construct($name, $weight);
        $this->dateBirth = $dateBirth;
    }

    public function getBirth() {
        return $this->dateBirth;
    }

    public function setBirth($dateBirth) {
        $this->dateBirth = $dateBirth;
    }


}

?>