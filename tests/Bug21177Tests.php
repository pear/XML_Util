<?php

/**
 * Bug #21177 "XML_Util::collapseEmptyTags() can return NULL"
 *
 * Original characters of the given encoding that are "replaced"
 * should then "reverse" back to perfectly match the original.
 *
 * @link https://pear.php.net/bugs/bug.php?id=5392
 */
class Bug21177Tests extends AbstractUnitTests
{
    public function getTestCandidate()
    {
        $expected = '<id_mytest_yesorno />';

        return array(
            array('<id_mytest_yesorno></id_mytest_yesorno>', '<id_mytest_yesorno />'),
            array('<id_mytest_yesorno />', '<id_mytest_yesorno />'),

            array('<idmytestyesorno></idmytestyesorno>', '<idmytestyesorno />'),
            array('<idmytestyesorno />', '<idmytestyesorno />'),
        );
    }

    /**
     * @dataProvider getTestCandidate()
     */
    public function testCollapseEmptyTagsForBug21177($original, $expected)
    {
        $this->assertEquals($expected, XML_Util::collapseEmptyTags($original, XML_UTIL_COLLAPSE_ALL), "Failed bugcheck.");
    }
}
