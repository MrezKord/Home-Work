<?php



class Parking
{

    private $start_time;
    private $end_time;
    private $vehicles_data;
    private $path_data = 'Data/Vehicles.json';
    private $capacity;
    private $floor;

    /**
     * find first empty item
     * 
     */

    private function emptyFind(){
        $container = $this->vehicles_data->exportToArray();
        foreach ($container as $key => $value) {
            if ($value['vehicle'] === '') {
                break;
            }
        }
        return $key;
    }

    /**
     * get total minute after park
     * 
     * @param string
     * @return string
     */

    private function TotalMinute($start) : string{
        $end = date('Y-m-d H:i', time());
        $entry = date_create($start);
        $end_time = date_create($end);

        $difference = date_diff($end_time, $entry);

        $container = $difference->days*24*60;
        $container += $difference->i;

        return $container;
    }

    /**
     * make a row json file for vehicles
     * 
     * @return void
     */

    private function rawFile(string $path) : void
    {
        $container = [];
        $c = 1;
        for ($i = 1; $i <= ($this->capacity * $this->floor); $i++) {
            $container[$i] = ['floor' => $c, 'vehicle' => '', 'status' => 'empty'];
            if ($i >= $this->capacity && $i % $this->capacity === 0) {
                $c++;
            }
        }
        file_put_contents($path, json_encode($container, JSON_PRETTY_PRINT));
    }

    /**
     * Constructor
     * 
     * @param int $capacity
     * @param int $flor
     * @param Rent $rent
     * @param string $start_time
     * @param string $end_time
     */
    
    public function __construct(int $capacity , int $floor, string $start_time, string $end_time)
    {
        $this->capacity = $capacity;
        $this->floor = $floor;
        $this->start_time = $start_time;
        $this->end_time = $end_time;
        if (!file_exists($this->path_data)) {
            $this->rawFile($this->path_data);
        }
        

        $this->vehicles_data = new JsonReader($this->path_data);
    }

    /**
     * find item and return key or false
     * 
     * @param Rent $rent
     */

    public function findValue(Rent $rent){
        $flag = false;
        $container = $this->vehicles_data->exportToArray();
        foreach ($container as $key => $value) {
            if ($value['vehicle'] !== '') {
                if ($value['vehicle']['plaque'] === $rent->getVehicleInfo()['plaque']) {
                    $flag = $key;
                    break;
                }
            }
        }
        return $flag;
    }


    /**
     * get value and write information in history.txt
     * 
     * @param array
     */

    private function history(array $value){
        $plaque = $value['plaque'];
        $date_entry = $value['entry_time'];
        $weight = $value['weight'];
        $entry_day = $value['entry_day'];
        $type = $value['type'];
        $minuts =  $this->TotalMinute($date_entry);
        $result = "The $type withe the Number plates $plaque On the $date_entry on the $entry_day by weight $weight It was $minuts minutes in the parking lot".PHP_EOL;

        $file = fopen('Data/history.txt', 'a+');
        fwrite($file, $result);
        fclose($file);
    }

    /**
     * get each income and write in Status.json
     */
    private function statusParking(int $income){
        $status_json = new JsonReader('Data/Stutus.json');
        if (!file_exists('Data/Stutus.json')) {
            $container = [
                'name' => 'parking',
                'start' => $this->start_time,
                'end' => $this->end_time,
                'total_capacity' => $this->capacity * $this->floor,
                'income' => $income
            ];
        }else {
            $container = $status_json->exportToArray();
            $container['income'] += $income;
        }

        $status_json->write($container);
    }

    /**
     * calculation income
     * 
     * @return int 
     */

    private function Income(array $value) : int{
        $income = 0;
        if ($value['vehicle']['type'] === 'Car') {
            if ($value['vehicle']['weight'] < 2000 ) {
                $income = (5000 +  ($this->TotalMinute($value['vehicle']['entry_time']) * 1000));
            }elseif ($value['vehicle']['weight'] >= 2000 &&  $value['vehicle']['weight'] < 4000) {
                $income = (10000 +  ($this->TotalMinute($value['vehicle']['entry_time']) * 2000));
            }elseif ($value['vehicle']['weight'] >= 10000) {
                $income = (20000 +  ($this->TotalMinute($value['vehicle']['entry_time']) * 5000));
            }
        }elseif($value['vehicle']['type'] === 'Motorcycle') {
            $income = (2500 +  ($this->TotalMinute($value['vehicle']['entry_time']) * 500));
        }
        return $income;
    }

    /**
     * add vehicle to parking
     * 
     * @param Rent $vahicle
     */

    public function addVehicle(Rent $vehicle){
        $time_entry = date('H:i', strtotime($vehicle->getVehicleInfo()['entry_time']));
        if ($this->findValue($vehicle) === false &&  ($time_entry > $this->start_time && $time_entry < $this->end_time)) {
            $key = $this->emptyFind();
            $container = $this->vehicles_data->add($vehicle->getVehicleInfo(), $key, 'vehicle');
            $container[$key]['status'] = 'full';
            $this->vehicles_data->write($container);   
        }
        return $this;
    }

    /**
     * Exit from parking
     * 
     * @param Rent $rent
     */

    public function Exit(Rent $rent){
        $container = $this->vehicles_data->exportToArray();
        $key = $this->findValue($rent);
        if ($key !== false) {
            $time_entry = date('H:i', strtotime($rent->getVehicleInfo()['entry_time']));
            if (($time_entry > $this->start_time && $time_entry < $this->end_time)) {
                $this->history($container[$key]['vehicle']);
    
                $this->statusParking($this->Income($container[$key]));
    
                $container[$key]['vehicle'] = '';
                $container[$key]['status'] = 'empty';
                $this->vehicles_data->write($container);
            }
        }
    }

    /**
     * get total income
     * 
     * @return int
     */

    public function getTotalIncome(){
        if (file_exists('Data/Stutus.json')) {
            $status_parking = new JsonReader('Data/Stutus.json');
            $container = $status_parking->exportToArray();
            return $container['income'];
        }else {
            echo "Account settlement has not yet taken place";
        }

    }
}

