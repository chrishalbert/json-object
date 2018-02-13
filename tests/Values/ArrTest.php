<?php

namespace ChrisHalbert\Json\Values;

class ArrTest extends \PHPUnit_Framework_TestCase
{
    public function testInvalidInitialization()
    {
        $this->setExpectedException('ChrisHalbert\Json\Exceptions\InvalidArgument');
        new Arr('invalid');
    }
}