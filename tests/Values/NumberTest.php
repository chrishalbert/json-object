<?php

namespace ChrisHalbert\Json\Values;

class NumberTest extends \PHPUnit_Framework_TestCase
{
    public function testInvalidInitialization()
    {
        $this->setExpectedException('ChrisHalbert\Json\Exceptions\InvalidArgument');
        new Number('invalid');
    }
}