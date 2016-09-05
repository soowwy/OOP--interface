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

    public function __construct($name, $code, $index, $climateData, $peopleInArea)
    {
        parent::__construct($name, $code, $index, $climateData);

        $this->peopleInArea = $peopleInArea;
    }

    public function __get($name)
    {
        parent::__get($name); // TODO: Change the autogenerated stub
    }

    public function __toString()
    {
        return parent::__toString().' '. sprintf('%s', $this->peopleInArea); // TODO: Change the autogenerated stub

    }


}