<?php
include "circleComparator.php";
$circleOne = new CircleComparator(8,"circleOne");
$circleTwo = new CircleComparator(8,"CircleTwo");

$compare = $circleOne -> Compare($circleTwo);
echo $compare;