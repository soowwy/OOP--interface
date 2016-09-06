<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 05.09.16
 * Time: 16:32
 */

require_once 'TraitGet.php';
require_once 'IPrintable.php';

class City implements IPrintable
{
    protected $name;
    protected $code; // състои се от 3 главни букви
    protected $index; // число от интервала 0-1
    protected $climateData;

    use TraitGet;

    public function __construct($name, $code, $index, $climateData)
    {
        $this->name = $name;
        $this->climateData = $this->checkClimateData($climateData);


        if(!is_numeric($index) || $index < 0 || $index > 1) {
            throw new Exception('The index must be 0 or 1');
        } else {
            $this->index = $index;
        }


        if (!preg_match("/[A-Z]{3}/", $code)) {
            throw new Exception('The code must be of 3 capital letters!');
        }
        return $code;


    }

    protected function checkClimateData($object)
    {
        if (!$object instanceof ClimateInfo) {
            throw new Exception('Expected object instance of ClimateInfo');
        }
        return $object;
    }

    public function __toString()
    {
        return sprintf("City: %s\nCountry code: %s\nDevelopment index: %01.2f\nClimate info: %s".PHP_EOL,
                        $this->name, $this->code, $this->index, $this->climateData);
    }

}