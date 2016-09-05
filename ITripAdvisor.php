<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 05.09.16
 * Time: 16:23
 */

interface ITripAdvisor
{
    public function rate(City $city);
}