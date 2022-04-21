<?php

class ClassItem{
    private int $id;
    private string $name;
    private string $description;
    private int $duration;
    private array $days;

    public function __construct($id,$name,$description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        // $this->duration = $duration;
        // $this->days = $days;
    }

    // If we do not want to use get_classItem()
    
    public function set_du($duration){
        $this->duration = $duration;
    }

    public function set_days(array $days){
        $this->days = $days;
    }

    /**
     * return class item (type = array) for using in student class
     *
     * @return array
     */

    public function get_classItem(){
        return ['id' => $this->id, 'name' => $this->name, 'description' => $this->description, 'duration' => $this->duration, 'days' => $this->days];
    }

    // TODO Generate getters and setters of properties


}
