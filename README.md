# Tree

Simple binary tree implementation in PHP.

## Usage

```php
<?php

    use Angle\Tree\Node;

    $node = new Node(10);
    $node->insert(5);
    $node->insert(15);
    $node->insert(8);

    $node->contains(5); // true
    $node->contains(42); // false

    $node->left->right->data == 8; // true

```
