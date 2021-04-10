<?php
include_once "abstractClass/fruits.php";
class Apple extends Fruit{
    public function howToEat()
    {
        return "Slice it!";
    }
}