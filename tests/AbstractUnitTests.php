<?php
use PHPUnit\Framework\TestCase;

abstract class AbstractUnitTests extends TestCase
{
    public function setUp()
    {
        // ensure the class is defined, and thus its constants are declared
        new XML_Util();
    }
}
