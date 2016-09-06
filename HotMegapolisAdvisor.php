<?php

class HotMegapolisAdvisor implements ITripAdvisor
{
    const MAJOR_CITY = 1.5;

    public function rate(City $city)
    {
        $rate = $city->climateData->maxTemperature;

        if ($city instanceof MajorCity) {
            $rate *= self::MAJOR_CITY;
        }

        return $rate;
    }
}