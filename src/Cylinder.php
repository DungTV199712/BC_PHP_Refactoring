<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 06/11/2018
 * Time: 08:58
 */

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = pi() * $radius * $radius;
        $perimeter = 2 * pi() * $radius;
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
}