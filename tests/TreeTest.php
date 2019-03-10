<?php

use PHPUnit\Framework\TestCase;

use Angle\Tree\Leaf;

class TreeTest extends TestCase
{
    /** @var Leaf */
    public $node;

    public function setUp()
    {
        $this->node = new Leaf(10);
        $this->node->insert(5);
        $this->node->insert(15);
        $this->node->insert(8);

        return $this->node;
    }

    /** @test */
    public function valuesAreInsertedProperly()
    {
        $this->assertTrue($this->node->left->data == 5);
        $this->assertTrue($this->node->right->data == 15);
        $this->assertTrue($this->node->left->right->data == 8);
    }

    /** @test **/
    public function weCanVerifyThatTreeContainsValue()
    {
        $this->assertTrue($this->node->contains(5));
        $this->assertTrue($this->node->contains(15));
        $this->assertTrue($this->node->contains(8));
    }

    /** @test **/
    public function weCanVerifyThatTreeDoesntContainUnexpectedValues()
    {
        $this->assertFalse($this->node->contains(42));
    }

    /** @test **/
    public function printInOrder()
    {
        $this->node->print();

        $this->expectOutputString('5 8 10 15 ');
    }
}
