<?php
include "circle.php";
include "comparator.php";
class CircleComparator extends Circle implements Comparator{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }

    public function Compare($circleTwo)
    {
        $radiusTwo = $circleTwo ->getRadius();
        if($this->getRadius()>$radiusTwo){
            return 1;
        }
        else if($this->getRadius() < $radiusTwo){
            return -1;
        }
        else return 0;
    }
}