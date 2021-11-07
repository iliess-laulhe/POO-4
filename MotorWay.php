<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{  
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    public function addVehicle(Vehicule $vehicule)
       {
        if ($vehicule instanceof Car) 
		{
            echo "Véhicule est autorisé sur ce type de voie"."</br>";
            $this->currentVehicles([$vehicle]);
        }else
		{
            echo "Véhicule non autorisé sur ce type de voie"."</br>";
        }
        
    }
    
}

?>