<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 05.09.16
 * Time: 16:32
 */
class City implements IPrintable
{
    protected $name;
    protected $code; // състои се от 3 главни букви
    protected $index; // число от интервала 0-1
    protected $climateData;

    public function __construct($name, $code, $index, $climateData)
    {
        $this->name = $name;
        $this->code = $code;
        $this->index = $index;
        $this->climateData = $climateData;

    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    public function __toString()
    {
        return sprintf('%s %s %d %s',
                        $this->name, $this->code, $this->index, $this->climateData);
    }

}