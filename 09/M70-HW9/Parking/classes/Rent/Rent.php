<?php 


class Rent{

    private $entrance_time;
    private Vehicle $vehicle;

    /**
     * Constructor
     * 
     * @param int $hour
     * @param int $day
     */

    public function __construct(Vehicle $vehicle)
    {
        date_default_timezone_set('iran');
        $this->entrance_time = date('Y-m-d H:i', time());
        $this->vehicle = $vehicle;
    }

    /**
     * return entrance time
     * 
     * @return string
     */

    public function entranceTime(){
        return $this->entrance_time;
    }

    /**
     * return entrance day (like : sunday)
     * 
     * @return string
     */

    public function entranceDay(){
        return date('l', strtotime($this->entrance_time));
    }


    public function getVehicleInfo(){
        return [
            'plaque' => $this->vehicle->getPlaque(),
            'weight' => $this->vehicle->getWeight(),
            'entry_time' => $this->entrance_time,
            'entry_day' => $this->entranceDay(),
            'type' => $this->vehicle->getType()
        ];
    }
    
}


// $a = new Rent(10, 1);
// echo $a->RentalHours();
