<?php

class ParkingSystem {
    protected $big = 0;
    protected $medium = 0;
    protected $small = 0;
    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    function __construct($big, $medium, $small) {
        $this->big = $big;
        $this->medium = $medium;
        $this->small = $small;
    }

    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType) {
        if($carType == 3 && $this->small > 0)
        {
            $this->small--;
            return true;
        }

        if($carType == 2 && $this->medium > 0)
        {
            $this->medium--;
            return true;
        }

        if($carType == 1 && $this->big > 0)
        {
            $this->big--;
            return true;
        }

        return false;
    }
}