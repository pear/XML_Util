<?php

class ApiVersionTests extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers XML_Util::apiVersion()
     */
    public function testApiVersion()
    {
        $this->assertEquals('1.4', XML_Util::apiVersion());
    }
}