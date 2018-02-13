<?php

namespace ChrisHalbert\Json\Values;

class BooleanTest extends \PHPUnit_Framework_TestCase
{
    public function testInvalidInitialization()
    {
        $this->setExpectedException('ChrisHalbert\Json\Exceptions\InvalidArgument');
        new Boolean('invalid');
    }
}
