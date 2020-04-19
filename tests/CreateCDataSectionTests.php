<?php

class CreateCDataSectionTests extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers XML_Util::createCDataSection()
     */
    public function testCreateCDataSectionBasicUsage()
    {
        $original = "I am content.";
        $expected ="<![CDATA[I am content.]]>";
        $this->assertEquals($expected, XML_Util::createCDataSection($original));
    }
}
