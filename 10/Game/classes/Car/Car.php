<?php

namespace Car;

abstract class Car {
    protected $Fuel_Level;
    protected $Destination_location;
    protected $Current_location;
    protected $fuel_ratio;

    use Move;
    use Geter;

    /**
     * Constractor
     * 
     * @param int $Fuel_Level
     * @param int $fuel_ratio
     * @param array $Destination_location
     * @param array $Current_location
     */

    public function __construct(int $Fuel_Level, int $fuel_ratio, array $Destination_location, array $Current_location = [0, 0])
    {
        $this->Fuel_Level = $Fuel_Level;
        $this->fuel_ratio = $fuel_ratio;
        $this->Destination_location = $Destination_location;
        $this->Current_location = $Current_location;
    }

    
    // abstract methods
    abstract public function increaseSpeed(int $Speed);
    abstract public function decreaseSpeed(int $Speed);

    /**
     * Acsses to decrease Fuel
     */
    public function Acsses() {
        if ($this->Fuel_Level >= $this->fuel_ratio) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Decrease fuel
     */

    public function decreaseFuel() {
        $this->Fuel_Level -= $this->fuel_ratio;
    }

}