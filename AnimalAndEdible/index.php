<?php
include "animals/chicken.php";
include "animals/tiger.php";
include "Fruit/apple.php";
include "Fruit/orange.php";
echo("---Animals<br>");
$animals[0]= new Tiger();
$animals[1]= new Chicken();
foreach ($animals as $animal){
    echo $animal->makeSound()."<br>";
    if($animal instanceof Chicken){
        echo $animal->howToEat()."<br>";
    }
}
echo("---Fruit<br>");
$fruits[0]= new Apple();
$fruits[1]= new Orange();
foreach ($fruits as $fruit){
    echo $fruit->howToEat(). "<br>";
}
echo __FILE__;