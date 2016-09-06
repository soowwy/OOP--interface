<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 05.09.16
 * Time: 16:28
 */
class ClimateInfo implements IPrintable
{
    protected $minTemp;
    protected $maxTemp;

    public function __construct($minTemp, $maxTemp)
    {
        $this->minTemp = $minTemp;
        $this->maxTemp = $maxTemp;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    public function __toString()
    {
        return sprintf('%s %s',
            $this->minTemp, $this->maxTemp);
    }
}