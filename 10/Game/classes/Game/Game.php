<?php

namespace Game;
use Car\Car;

class Game {
    
    private $car;

    use Help;
    use Status;
    use Move;

    /**
     * Constractor
     * 
     * @param Car $car
     */
    public function __construct(Car $car) 
    {
        $this->car = $car;
    }
}