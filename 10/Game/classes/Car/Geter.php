<?php

namespace Car;

trait Geter {
    
    public function getFuelLevel() {
        return $this->Fuel_Level;
    }

    public function showCurrentLocation() {
        return $this->Current_location;
    }

    public function getDestinationLocation() {
        return $this->Destination_location;
    }
}