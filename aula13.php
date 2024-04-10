<?php


$membros = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "<br>";
echo "##########################################";
echo "<br>";
$cars = [
    0=> "Volvo",
    1=> "BMW",
    2=> "Toyoya",
];

echo "<br>";
echo "##########################################";
echo "<br>";

echo $cars["0"];
echo "<br>";
echo $cars['1'];
echo "<br>";
echo $cars['2'];

$mycar = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";


echo "<br>";
echo "##########################################";
echo "<br>";

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
echo "<br>";

$car = array("brand"=>"Chevrolet", "model"=>"Corsa", "year"=>1994);
echo $car["model"];
echo "<br>";

$car = array("brand"=>"Fiat", "model"=>"Palio", "year"=>1996);
echo $car["model"];



?>