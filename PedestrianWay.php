<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;
    
        public function addVehicle(Vehicule $vehicule)
    {
        if ($vehicule instanceof Bike) {
            echo "Véhicule est autorisé sur ce type de voie "."</br>";
            $this->currentVehicles([$vehicle]);
        }else
		{
            echo "Véhicule non autorisé sur ce type de voie"."</br>";
        }
        
    }
}