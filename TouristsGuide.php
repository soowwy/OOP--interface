<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 05.09.16
 * Time: 17:41
 */
class TouristsGuide
{

    protected $towns;


    public function __construct($towns)
    {
        $this->towns = [];
    }

    public static function convertToFahrenheit($degrees)
    {
        return $degrees = $degrees*9/5 + 32;
    }

    public function isFahrenheit($isFahrenheit)
    {

        foreach ($this->towns as $town) {
            if($isFahrenheit) {
                $minTemp = self::convertToFahrenheit($town->climateInfo->minTemp);
                $maxTemp = self::convertToFahrenheit($town->climateInfo->maxTemp);
            } else {
                $minTemp = $town->climateInfo->minTemp;
                $maxTemp = $town->climateInfo->maxTemp;
            }
        }
    }

    public function addCity(City $city)
    {
        $this->towns[] = $city;

    }

    public function getBest(ITripAdvisor $advisor)
    {
        $heightRate;
        foreach ($this->towns as $value) {
            if (!isset($heightRate) || $heightRate < $advisor->rate($value)) {
                $heightRate = $advisor->rate($value);
                $bestCity = $value;
            }
        }

        return $bestCity;
    }
}