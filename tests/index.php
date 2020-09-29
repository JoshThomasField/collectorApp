<?php
require '../functions.php';
use PHPUnit\Framework\TestCase;
class index extends TestCase
{
    // Passing array expecting string to be returned.
    public function testSuccessDisplayBook()
    {
        $input = ['name' => 'Hello', 'author' => 'Talon Edge', 'category' => 'evil', 'released' => '2000'];
        $expectedOutput = '<div class="item"><div class="bookDetails"><p>Hello</p><p>Talon Edge</p><p>evil</p><p>2000</p></div></div>';
        $result = displayBook($input);
        $this->assertEquals($expectedOutput, $result);
    }
    public function testFailureDisplayBookName()
    {
        $input = ['names' => 'Hello', 'author' => 'Talon Edge', 'category' => 'evil', 'released' => '2000'];
        $result = displayBook($input);
        $this->assertEquals('', $result);
    }
    public function testFailureDisplayBookAuthor()
    {
        $input = ['name' => 'Hello', 'authors' => 'Talon Edge', 'category' => 'evil', 'released' => '2000'];
        $result = displayBook($input);
        $this->assertEquals('', $result);
    }
    public function testFailureDisplayBookCategory()
    {
        $input = ['name' => 'Hello', 'author' => 'Talon Edge', 'categories' => 'evil', 'released' => '2000'];
        $result = displayBook($input);
        $this->assertEquals('', $result);
    }
    public function testFailureDisplayBookReleased()
    {
        $input = ['name' => 'Hello', 'author' => 'Talon Edge', 'category' => 'evil', 'releases' => '2000'];
        $result = displayBook($input);
        $this->assertEquals('', $result);
    }
    public function testMalformedDisplayBook()
    {
        $this->expectException(TypeError::class);
        $input = 'hi';
        displayBooks($input);
    }
}