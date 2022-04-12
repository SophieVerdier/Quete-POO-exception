<?php 

require_once 'Car.php'; 

$car = new Car();

try{
    $car->start();
} catch (Exception $e) {
    echo 'Exception received  : ' . $e->getMessage() . '<br>';
   
    $car->setHasParkBrake(true);
} finally{
    echo 'Ma voiture roule comme un donut';
}
