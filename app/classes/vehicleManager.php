<?php
require_once __DIR__ . "/ParentVehicle.php";
require_once __DIR__ . "/FileHandler.php";
require_once __DIR__ . "/VehicleActions.php";


class VehicleManager extends ParentVehicle implements VehicleActions{
    use FileHandler;

    public function addVehicle($data)
    {
        $vehicles = $this->FileRead();
        $vehicles[] = $data;
        $this->FileWrite($vehicles);
    }

    public function editVehicle($id, $data)
    {
        $vehicles = $this->FileRead();
        $vehicles[$id] = $data;
        $this->FileWrite($vehicles);
    }

    public function deleteVehicle($id)
    {
        
    }

    public function getVehicle()
    {
        return $this->FileRead();
    }

    public function getDetails()
    {
        
    }
}