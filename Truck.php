<?php
require_once 'Vehicule.php';
class Truck extends Vehicule 
{
  const ALLOWED_ENERGIES = 
   [
		'fuel',
		'electric',
	];
    private  $capacity ; 
	private   $charge = 0;
	
	
    public function getCapacity(): int
		{
			return $this->capacity;
		}
	
	public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
		{
			parent::__construct($color, $nbSeats);
			
			$this->capacity = $capacity;
		}

	
	
	public function start() : string
		{
			return '  le Camion démarre ';
		}
	
	
	public function isFull() : string
		{
			if ($this->charge >= $this->capacity)
			{
				$sentence = 'Le camion est rempli';
			} else
			{
				$sentence = 'le camion n\'est pas rempli';
			}
			return $sentence;
		}
	
	 public function getFuelLevel(): int
		{
			return $this->fuelLevel;
		}

		
		public function setFuelLevel(int $energyLevel): void
		{
			$this->energyLevel = $fuelLevel;
		}
	
	
		
	
	 
	 public function setCapacity(int $capacity): void
		{
			$this->capacity = $capacity;
		}
	 
	
	
	 
	
	
	public function getCharge(): int
		{
			return $this->charge;
		}

		
		public function setCharge(int $charge): void
		{
			$this->charge = $charge;
		}

}