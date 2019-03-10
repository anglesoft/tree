# 🌳 Tree

Simple binary tree implementation in PHP.

## Installation

```shell
composer require angle/tree
```

## Usage

Creating a tree:
```php
use Angle\Tree\Leaf;

$tree = new Leaf(10);
$tree->insert(5);
$tree->insert(15);
$tree->insert(8);
```

Check for values within the tree:
```php
$tree->contains(5); // true
$tree->contains(42); // false
```

Climb the tree:
```php
$tree->left->right->data == 8; // true
```

## Contributing

Improvements are welcome! Feel free to submit pull requests.

## Licence

MIT

Copyright © 2019 [Angle Software](https://angle.software)
