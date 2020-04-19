<?php

class CreateCommentTests extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers XML_Util::createComment()
     */
    public function testCreateCommentBasicUsage()
    {
        $original = "I am comment.";
        $expected = "<!-- I am comment. -->";
        $this->assertEquals($expected, XML_Util::createComment($original));
    }
}
