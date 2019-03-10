<?php

namespace Angle\Tree;

class Leaf
{
    /** @var Leaf */
    public $left, $right;

    /** @var int */
    public $data;

    public function __construct(int $data)
    {
        $this->data = $data;
    }

    /**
     * Inserts value into the tree.
     * @param int $value
     */
    public function insert(int $value) : void
    {
        if ($value <= $this->data) {
            if ($this->left == null) {
                $this->left = new Leaf($value);
            } else {
                $this->left->insert($value);
            }
        } else {
            if ($this->right == null) {
                $this->right = new Leaf($value);
            } else {
                $this->right->insert($value);
            }
        }
    }

    /**
     * Looks for a value in the tree.
     * @param  int  $value
     * @return bool
     */
    public function contains(int $value) : bool
    {
        if ($value == $this->data) {
            return true;
        } else if ($value < $this->data) {
            if ($this->left == null) {
                return false;
            } else {
                return $this->left->contains($value);
            }
        } else {
            if ($this->right == null) {
                return false;
            } else {
                return $this->right->contains($value);
            }
        }
    }

    public function print()
    {
        if ($this->left != null) {
            $this->left->print();
        }

        print $this->data . " ";

        if ($this->right != null) {
            $this->right->print();
        }
    }
}
