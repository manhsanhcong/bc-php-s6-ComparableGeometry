<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 01/11/2018
 * Time: 17:01
 */

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOne, $circleTwo)
    {
        $circleOneRadius = $circleOne->getRadius();
        $circleTwoRadius = $circleTwo->getRadius();

        if ($circleOneRadius > $circleTwoRadius) {
            return 1;
        } else if($circleOneRadius < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}