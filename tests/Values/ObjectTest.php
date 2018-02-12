<?php

namespace ChrisHalbert\Json\Values;

class ObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testEmptyObjectCreated()
    {
        $this->assertInstanceOf('ChrisHalbert\Json\Values\Object', new Object());
    }

    public function testInvalidInitialization()
    {
        $this->setExpectedException('ChrisHalbert\Json\Exceptions\InvalidObjectType');
        $obj = new Object('invalid');
    }

    public function testArrayInitialization()
    {
        $obj = new Object($this->getJsonMembers());

        $this->assertInstanceOf('ChrisHalbert\Json\Values\Arr', $obj->get('array'));
        $this->assertInstanceOf('ChrisHalbert\Json\Values\Object', $obj->get('object'));
        $this->assertInstanceOf('ChrisHalbert\Json\Values\Object', $obj->get('objectFromArray'));
        $this->assertInstanceOf('ChrisHalbert\Json\Values\number', $obj->get('number'));
        $this->assertInstanceOf('ChrisHalbert\Json\Values\Str', $obj->get('string'));
        $this->assertInstanceOf('ChrisHalbert\Json\Values\Boolean', $obj->get('boolean'));
        $this->assertInstanceOf('ChrisHalbert\Json\Values\Nil', $obj->get('null'));
        $this->assertInstanceOf('ChrisHalbert\Json\Values\Str', $obj->get('objectFromArray')->get('associative'));
    }

    public function testToString()
    {
        echo new Object($this->getJsonMembers());
    }


    private function getJsonMembers()
    {
        return array(
            'array' => array(),
            'object' => new \stdClass(),
            'objectFromArray' => array('associative' => 'array'),
            'number' => 5.123,
            'string' => 'string',
            'boolean' => true,
            'null' => null
        );
    }
}