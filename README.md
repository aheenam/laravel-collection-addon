*package still in development*

Laravel Collection Addons
===

This package provides some additional functions that can be used with Laravel's Collection.

Installation
---
You can install the package via composer:

```bash
composer require aheenam/laravel-collection-addon
```

Usage
---

This package comes with following additional methods for Laravel collections

### `containsAll($subset)`

This method returns true if the collection contains all elements of the given `$subset`.

```php
<?php

// returns true
collect([1,2,3])->containsAll([1,2]);

// returns false
collect([1,2,3])->containsAll([1,4]);
```

### `containsAny($subset)`

This method returns true if the collection contains any of the elements given in `$subset`

```php
<?php

// returns true
collect([1,2,3])->containsAny([1,4]);

// returns false
collect([1,2,3])->containsAny([4,5]);
```

Changelog
---
Check [CHANGELOG](CHANGELOG.md) for the changelog

Testing
---
To run tests use

    $ composer test

Contributing
---


Security
---
If you discover any security related issues, please email rathes@aheenam.com or use the issue tracker of GitHub.

About
---
Aheenam is a small company from NRW, Germany creating custom digital solutions. Visit
[our website](https://aheenam.com) to find out more about us.

License
---
The MIT License (MIT). Please see [License File](LICENSE) for more information.