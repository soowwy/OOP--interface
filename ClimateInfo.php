<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 05.09.16
 * Time: 16:28
 */
class ClimateInfo implements IPrintable
{
    protected $minTempC;
    protected $maxTempC;

    public function __construct($minTempC, $maxTempC)
    {
        $this->minTempC = $minTempC;
        $this->maxTempC = $maxTempC;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    public function __toString()
    {
        return sprintf('%s %s',
            $this->minTempC, $this->maxTempC);
    }
}