<?php
require_once'Truck.php';
require_once'Bicycle.php';
require_once 'Car.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicule.php';

$car = new Car('yellow',3,'fuel');
$bike = new Bicycle('red',1);
$monster = new Truck('red', 2, 'essence',100);

$motorWay= new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();


try {
    $car->start();
} catch (Exception $e) {
    $car->setHasParkBrake(false);
}finally {
    echo "Ma voiture roule comme un donut";
}

?>




