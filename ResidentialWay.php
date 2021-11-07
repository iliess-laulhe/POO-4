<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
   
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    
    public function addVehicle(Vehicule $vehicule)
    {
        if ($vehicule instanceof Vehicule) {
            echo "Véhicule est autorisé  sur ce type de voie."."</br>";
            $this->currentVehicles([$vehicle]);
        } else {
            echo "Véhicule non autorisé  sur ce type de voie"."</br>";
        }
        
    }
    
}

?>