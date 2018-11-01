<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 01/11/2018
 * Time: 17:09
 */

include "ComparableCircle.php";

$circles[0] = new ComparableCircle('circleOne', 9);
$circles[1] = new ComparableCircle('circleTwo', 2);
$circles[2] = new ComparableCircle('circleThree', 12);

echo ('Pre-sorted: <br>');
foreach ($circles as $circle)
{
    echo ('name: ' . $circle->getName() . ', radius: '. $circle->getRadius() . '<br>');
}

soft($circles);

echo('After-sorted: <br>');
foreach ($circles as $circle)
{
    echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}