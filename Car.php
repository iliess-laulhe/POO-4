<?php
class Car
{
    private $color;
    private   $nbWheels;
    private   $nbSeats ;
    private   $currentSpeed ;
    private  $typeEnergie ;
    private   $fuelLevel ;
    private $hasParkBrake;

    public function __construct($color, $nbSeats, $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->typeEnergie = $energyType;
    }



    public function start(): string
    {
        if($this->hasParkBrake) {
            throw new Exception('Frain à main activé <br>');
        }
        $this->currentSpeed = 40;
        return "Go !";
    }


    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    public function getFuelLevel():int {
        return $this->fuelLevel;
    }

    public function getTypeEnergie(): string {

        return $this->typeEnergie;
    }
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

}