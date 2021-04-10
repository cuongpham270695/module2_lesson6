<?php
include_once "abstractClass/animal.php";
class Tiger extends Animal{
    public function makeSound()
    {
        return "Tiger roar: GRrrrrr!";
    }
}