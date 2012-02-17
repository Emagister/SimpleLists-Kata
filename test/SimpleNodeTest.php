<?php
/**
 * Created by JetBrains PhpStorm.
 * User: csoronellas
 * Date: 17/02/12
 * Time: 15:35
 * To change this template use File | Settings | File Templates.
 */
require_once('PHPUnit/Framework/TestCase.php');

class SimpleNodeKataTest extends PHPUnit_Framework_TestCase
{
    private $_node;

    public function setup()
    {
        require_once('../src/SimpleNode.php');
        $this->_node = new SimpleNode();
    }
}