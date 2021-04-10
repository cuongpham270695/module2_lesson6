<?php
include_once "abstractClass/animal.php";
include_once "interfaceClass/interface.php";
class Chicken extends Animal implements Edible {
    public function makeSound()
    {
        return "Chicken says: cluk-cluk";
    }
    public function howToEat()
    {
        return "Need to boiled!";
    }
}