<?php

namespace Game;

trait Help {

    /**
     * Handel message when we near the destination
     */

    protected function positiveHelp() {
        $dif_x = $this->car->getDestinationLocation()[0] - $this->car->showCurrentLocation()[0];
        $dif_y = $this->car->getDestinationLocation()[1] - $this->car->showCurrentLocation()[1];
        if (($dif_x === 2 && $dif_y === 0) || ($dif_y === 2 && $dif_x === 0)) {
            echo "You are approaching the destination :)".PHP_EOL;
        }elseif (($dif_x === 1 && $dif_y === 0) || ($dif_x === 0 && $dif_y === 1)) {
            echo "One step left to win :)".PHP_EOL;
        }
        elseif (($dif_y < 0) || ($dif_x < 0)) {
            echo "You are moving away from your destination :(".PHP_EOL;
        }
    }

    /**
     * Handel message When we get away from the destination
     */

    protected function negativeHelp(){
        $dif_x = $this->car->getDestinationLocation()[0] - $this->car->showCurrentLocation()[0];
        $dif_y = $this->car->getDestinationLocation()[1] - $this->car->showCurrentLocation()[1];
        if ((($dif_x === 0 || $dif_x === 1) && $dif_y >= 1) || (($dif_y === 0 || $dif_y === 1) && $dif_x >= 1)) {
            echo "You are moving away from your destination :(".PHP_EOL;
        }
    }
}