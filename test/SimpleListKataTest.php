<?php
/**
 * Created by JetBrains PhpStorm.
 * User: csoronellas
 * Date: 17/02/12
 * Time: 14:43
 * To change this template use File | Settings | File Templates.
 */
require_once('PHPUnit/Framework/TestCase.php');


class SimpleListKataTest extends PHPUnit_Framework_TestCase
{
    private $_list;

    public function setup()
    {
        require_once('../src/SimpleList.php');
        require_once('../src/SimpleNode.php');
        $this->_list = new SimpleList();
    }

    public function testSearchOnEmptyDataset()
    {
        $this->assertNull($this->_list->find('pepe'));
    }

    public function testAddNode()
    {
        $this->_list->add('fred');
        $this->assertTrue(new SimpleNode('fred') === $this->_list->find('fred')->getValue(), 'Fred no se inserto en la lista');
    }

    public function testSearchNoExistValue()
    {
       $var = new SimpleNode('fred');

       $this->_list->add($var);
       $this->assertNull($this->_list->find(new SimpleNode('wilma')));
    }

    public function testSearchExistValues(){

        $var = new SimpleNode('fred');
        $var2 = new SimpleNode('wilma');

        $this->_list->add($var);
        $this->_list->add($var2);
        $this->assertTrue('fred' === $this->_list->find(new SimpleNode('fred')), 'Fred no se inserto en la lista');
        $this->assertTrue('wilma' === $this->_list->find(new SimpleNode('wilma')), 'Wilma no se inserto en la lista');
    }

    public function testReturnOldValues()
    {
        $this->_list->add('fred');
        $this->_list->add('bilma');

       $this->assertTrue(array('fred','bilma')===$this->_list->getValues());
    }

    public function testDeleteValue()
    {
        $this->_list->add('fred');
        $this->_list->add('wilma');
        $this->_list->add('betty');
        $this->_list->add('barney');
        $this->assertTrue(array('fred', 'wilma', 'betty', 'barney') === $this->_list->getValues());

        $this->_list->delete($this->_list->find('wilma'));
        $this->assertTrue(array('fred', 'betty', 'barney') === $this->_list->getValues());
    }

    public function testDeleteAllValues()
    {
        $this->_list->add('fred');
        $this->_list->add('wilma');
        $this->_list->add('betty');
        $this->_list->add('barney');
        $this->assertTrue(array('fred', 'wilma', 'betty', 'barney') === $this->_list->getValues());

        $this->_list->delete($this->_list->find('wilma'));
        $this->assertTrue(array('fred', 'betty', 'barney') === $this->_list->getValues());

        $this->_list->delete($this->_list->find('barney'));
        $this->assertTrue(array('fred', 'betty') === $this->_list->getValues());

        $this->_list->delete($this->_list->find('fred'));
        $this->assertTrue(array('betty') === $this->_list->getValues());

        $this->_list->delete($this->_list->find('betty'));
        $this->assertTrue(array() === $this->_list->getValues());
    }
}
