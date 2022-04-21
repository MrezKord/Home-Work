<?php

namespace Game;

trait Status {

    /**
     * Check Equal destination location and Current location
     * 
     * @param array $container1
     * @param array $container2
     */
    protected function checkEquals(array $container1, array $container2){
        $flag = true;
        if (count($container1) === count($container2)) {
            for ($i=0; $i < count($container1); $i++) { 
                if ($container1[$i] !== $container2[$i]) {
                    $flag = false;
                }                
            }
        }
        return $flag;
    }

    /**
     * Check user is won or not
     * 
     * @return bool
     */

    protected function CheckWin(){
        if ($this->checkEquals($this->car->getDestinationLocation(), $this->car->showCurrentLocation())) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Show Status
     */
    protected function status(){
        if ($this->CheckWin()) {
            echo 'x : '.$this->car->showCurrentLocation()[0].' y: '
            .$this->car->showCurrentLocation()[1].PHP_EOL . "You won!";
            exit;
        }elseif ($this->car->Acsses() && !$this->CheckWin()) {
            echo 'x : '.$this->car->showCurrentLocation()[0].' y: '
            .$this->car->showCurrentLocation()[1].PHP_EOL;        
        }else{
            echo 'x : '.$this->car->showCurrentLocation()[0].' y: '
            .$this->car->showCurrentLocation()[1].PHP_EOL . "Game over!";
            exit;
        }
    }
}