<?php
require '../functions.php'; // Require the file to be tested
use PHPUnit\Framework\TestCase;
class index extends TestCase
{
    // Passing array expecting string to be returned.
    public function testSuccessDisplayBooks()
    {
        $input = ['name' => 'Hello', 'author' => 'Talon Edge', 'category' => 'evil', 'released' => '2000'];
        $expectedOutput = '<div class="item"><div class="bookDetails"><p>Hello</p><p>Talon Edge</p><p>evil</p><p>2000</p></div></div>';
        $result = displayBooks($input);
        $this->assertEquals($expectedOutput, $result);
    }
    public function testFailureDisplayBooksName()
    {
        $input = ['names' => 'Hello', 'author' => 'Talon Edge', 'category' => 'evil', 'released' => '2000'];
        $result = displayBooks($input);
        $this->assertEquals('', $result);
    }
    public function testFailureDisplayBooksAuthor()
    {
        $input = ['name' => 'Hello', 'authors' => 'Talon Edge', 'category' => 'evil', 'released' => '2000'];
        $result = displayBooks($input);
        $this->assertEquals('', $result);
    }
    public function testFailureDisplayBooksCategory()
    {
        $input = ['name' => 'Hello', 'author' => 'Talon Edge', 'categories' => 'evil', 'released' => '2000'];
        $result = displayBooks($input);
        $this->assertEquals('', $result);
    }
    public function testFailureDisplayBooksReleased()
    {
        $input = ['name' => 'Hello', 'author' => 'Talon Edge', 'category' => 'evil', 'releases' => '2000'];
        $result = displayBooks($input);
        $this->assertEquals('', $result);
    }
    public function testMalformed()
    {
        $this->expectException(TypeError::class);
        $input = 'hi';
        displayBooks($input);
    }
}