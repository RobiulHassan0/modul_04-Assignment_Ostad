<?php
require_once __DIR__ . "/ParentVehicle.php";
require_once __DIR__ . "/FileHandler.php";
require_once __DIR__ . "/VehicleActions.php";


class VehicleManager extends ParentVehicle implements VehicleActions{
    use FileHandler;

    public function addVehicle($data)
    {
        
    }

    public function editVehicle($id, $data)
    {
        
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