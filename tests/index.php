<?php
require '../functions.php';
use PHPUnit\Framework\TestCase;
class index extends TestCase
{
    // Passing array expecting string to be returned.
    public function testSuccessDisplayBook()
    {
        $input = ['name' => 'Hello', 'author' => 'Talon Edge', 'category' => 'evil', 'released' => '2000'];
        $expectedOutput = '<div class="item"><div class="bookDetails"><p class="bookHeading">Hello</p><p class="bookAuthor">Talon Edge</p><p class="bookCategory">evil</p><p class="releaseYear">2000</p></div></div><form method="POST"><input type="hidden" name="bookToBeDeleted" value="Hello">\n
+            <input type="submit" name="delete" value="Delete"/><br/>\n
+            </form></div>';
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
        displayBook($input);
    }
}