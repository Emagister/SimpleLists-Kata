<?php
/**
 * Created by JetBrains PhpStorm.
 * User: csoronellas
 * Date: 17/02/12
 * Time: 15:39
 * To change this template use File | Settings | File Templates.
 */
class SimpleNode
{
    private $_value;

    public function __construct($value)
    {
        $this->_value = $value;
    }

    public function getValue()
    {
        return $this->_value;
    }

    public function __toString()
    {
        return $this->getValue();
    }
}