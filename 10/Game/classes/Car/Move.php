<?php

namespace Car;

trait Move {
   
    public function Up() {
        if ($this->Acsses()) {
            $this->Current_location[1] += 1;
            $this->decreaseFuel();
        }
    }

    public function Down() {
        if ($this->Acsses()) {
            $this->Current_location[1] -= 1;
            $this->decreaseFuel();
        }
    }

    public function Left() {
        if ($this->Acsses()) {
            $this->Current_location[0] -= 1;
            $this->decreaseFuel();
        }
    }

    public function Right() {
        if ($this->Acsses()) {
            $this->Current_location[0] += 1;
            $this->decreaseFuel();
        }    
    }
}