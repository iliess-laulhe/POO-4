<?php

require_once 'Vehicule.php';
require 'LightableInterface.php';

class Bicycle extends Vehicule implements LightableInterface
{


    public function switchOff(): bool
    {
        return false;
    }

    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        }
        return false;
    }
}