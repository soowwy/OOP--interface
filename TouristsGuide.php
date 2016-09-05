<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 05.09.16
 * Time: 17:41
 */
class TouristsGuide implements ITripAdvisor
{

    public function rate(City $city)
    {

    }

    protected $towns = [];

    public function __construct($towns)
    {
        $this->towns = $towns;
    }

    public static function convertToFahrenheit($degrees)
    {
        return $degrees = $degrees*9/5 + 32;
    }

    public function isFahrenheit()
    {

    }
}