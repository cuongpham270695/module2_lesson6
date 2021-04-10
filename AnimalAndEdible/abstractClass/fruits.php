<?php
include_once "interfaceClass/interface.php";
abstract class Fruit implements Edible {
    abstract public function howToEat();
}