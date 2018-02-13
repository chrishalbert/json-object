<?php

namespace ChrisHalbert\Json\Values;

class StrTest extends \PHPUnit_Framework_TestCase
{
    public function testInvalidInitialization()
    {
        $this->setExpectedException('ChrisHalbert\Json\Exceptions\InvalidArgument');
        new Str(123);
    }
}