<?php

abstract class AbstractUnitTests extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        // ensure the class is defined, and thus its constants are declared
        new XML_Util();
    }
}