<?php
/**
 * Created by JetBrains PhpStorm.
 * User: csoronellas
 * Date: 17/02/12
 * Time: 14:53
 * To change this template use File | Settings | File Templates.
 */
class SimpleList
{
    private $_data;

    public function __construct()
    {
        $this->_data = array();
    }

    public function find($name)
    {
        /* @var SimpleNode $item */
        foreach($this->_data as $item) {
            if ($item->getValue() === $name) {
                return $item;
            }
        }
        return null;
    }

    public function add($name)
    {
        $this->_data[]= new SimpleNode($name);
    }
    public function getValues()
    {
       return $this->_data;
    }

    public function delete($name)
    {
        $pos = array_search($name, $this->_data);
        if ($pos !== false) {
            unset($this->_data[$pos]);
            $this->_data = array_values($this->_data);
        }
    }
}