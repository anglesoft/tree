<?php

use PHPUnit\Framework\TestCase;

use Angle\Tree\Leaf;

class TreeTest extends TestCase
{
    /** @var Leaf */
    public $tree;

    public function setUp()
    {
        $this->tree = new Leaf(10);
        $this->tree->insert(5);
        $this->tree->insert(15);
        $this->tree->insert(8);

        return $this->tree;
    }

    /** @test */
    public function valuesAreInsertedProperly()
    {
        $this->assertTrue($this->tree->left->data == 5);
        $this->assertTrue($this->tree->right->data == 15);
        $this->assertTrue($this->tree->left->right->data == 8);
    }

    /** @test **/
    public function weCanVerifyThatTreeContainsValue()
    {
        $this->assertTrue($this->tree->contains(5));
        $this->assertTrue($this->tree->contains(15));
        $this->assertTrue($this->tree->contains(8));
    }

    /** @test **/
    public function weCanVerifyThatTreeDoesntContainUnexpectedValues()
    {
        $this->assertFalse($this->tree->contains(42));
    }

    /** @test **/
    public function printInOrder()
    {
        $this->tree->print();

        $this->expectOutputString('5 8 10 15 ');
    }
}
