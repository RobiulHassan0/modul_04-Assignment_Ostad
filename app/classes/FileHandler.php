<?php
trait FileHandler{
    private $FilePath = __DIR__ . "/../../data/data.json";

    public function FileRead(){
        if(!file_exists($this->FilePath)){
            file_put_contents($this->FilePath, json_encode([]));
        }
        return json_decode(file_get_contents($this->FilePath), true);
    }

    public function FileWrite($data){
        file_put_contents($this->FilePath, json_encode($data, JSON_PRETTY_PRINT));
    }
}