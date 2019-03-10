# Tree

Simple binary tree implementation in PHP.

## Usage

```php
<?php

    use Angle\Tree\Leaf;

    $tree = new Leaf(10);
    $tree->insert(5);
    $tree->insert(15);
    $tree->insert(8);

    $tree->contains(5); // true
    $tree->contains(42); // false

    $tree->left->right->data == 8; // true

```
