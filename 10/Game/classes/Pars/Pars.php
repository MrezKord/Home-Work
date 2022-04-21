<?php


namespace Pars;
use Car\Car;

class Pars extends Car {


    /**
     * Handel increas speed
     */

    public function increaseSpeed(int $Speed)
    {
        if ($Speed > 1) {
            $this->fuel_ratio *= (($Speed/8) + 1);
        }else {
            echo "invalid format, Continue to the previous routine".PHP_EOL;
        }
    }

    /**
     * Handel decreas speed
     */

    public function decreaseSpeed(int $Speed)
    {
        if ($Speed > 1 && $Speed/10 < 1) {
            $this->fuel_ratio *= 1 - $Speed/12;
        }elseif ($Speed > 1 && $Speed/10 >= 1) {
            $this->fuel_ratio *= 1 - 12/$Speed;
        }else {
            echo "invalid format, Continue to the previous routine".PHP_EOL;
        }
    }

}