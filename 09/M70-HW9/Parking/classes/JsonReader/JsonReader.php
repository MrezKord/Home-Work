<?php


class JsonReader {
    private $data;
    private $path;


    /**
     * Constructor
     * 
     * @param string $path
     */

    public function __construct(string $path)
    {
        $this->path = $path;        
    }
    
    /**
     * add vehicle to json file
     * 
     * @return array
     */

    public function add(array $subject, $key, $secondKey = ''){
        $container = $this->exportToArray(); 
        if ($secondKey === '') {
            $container[$key] = $subject;
        }else {
            $container[$key][$secondKey] = $subject;
        }
        return $container;
    }

    /**
     * Write in json file
     * 
     * @param array $target
     */

    public function write(array $target){ 
        file_put_contents($this->path, json_encode($target, JSON_PRETTY_PRINT));
    }

    /**
     * Read from json file
     * 
     */

    public function read(){
        return file_get_contents($this->path);
    }

    /**
     * Decode data and export to array
     * 
     * @return array
     */

    public function exportToArray(){
        $this->read();
        $this->data = json_decode($this->read(), true);
        return $this->data;
    }

    public function chengeValue($key1, $key2, $value){
        $container = $this->exportToArray();
        $container[$key1][$key2] = $value;
        $this->write($container);
    }
}



