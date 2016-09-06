<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 05.09.16
 * Time: 17:29
 */

class MajorCity extends City
{
    protected $peopleInArea;

    use TraitGet;

    public function __construct($name, $code, $index, $climateData, $peopleInArea)
    {
        parent::__construct($name, $code, $index, $climateData);

        $this->peopleInArea = $peopleInArea;
    }


    public function __toString()
    {
        return parent::__toString() . sprintf("People living in the area: %d\n", $this->peopleInArea);

    }


}