<?php

class CreateEndElementTests extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers XML_Util::createEndElement()
     */
    public function testCreateEndElementBasicUsage()
    {
        $original = "myTag";
        $expected = "</myTag>";
        $this->assertEquals($expected, XML_Util::createEndElement($original));
    }

    /**
     * @covers XML_Util::createEndElement()
     */
    public function testCreateEndElementWithNamespacedTag()
    {
        $original = "myNs:myTag";
        $expected = "</myNs:myTag>";
        $this->assertEquals($expected, XML_Util::createEndElement($original));
    }
}
