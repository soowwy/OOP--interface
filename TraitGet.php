<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 06.09.16
 * Time: 20:03
 */
trait TraitGet
{
    public function __get($name)
    {
        return isset($this->$name) ? $this->$name : null;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }
}