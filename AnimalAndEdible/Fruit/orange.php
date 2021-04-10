<?php
include_once "abstractClass/fruits.php";
class Orange extends Fruit{
    public function howToEat()
    {
        return "Squeeze to take juiced";
    }
}