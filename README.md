# json-object
[![Build Status](https://travis-ci.org/chrishalbert/json-object.svg?branch=master)](https://travis-ci.org/chrishalbert/json-object)
[![Latest Stable Version](https://poser.pugx.org/chrishalbert/json-object/version)](https://packagist.org/packages/chrishalbert/json-object)
[![License](https://poser.pugx.org/chrishalbert/json-object/license)](https://packagist.org/packages/chrishalbert/json-object)

## Overview
Php implementation of handling JSON objects.

## Installation

Add this to your composer file:
```
{
    "require": {
        "chrishalbert/json-object": "1.*"
    }
} 
```

Or simply on the command line:
```
composer require chrishalbert/json-object
```

## Usage
```php

$object = new Object();
$object->set('array', [1,2,3]);
$object->set('key', 'value');
$object->set('nestedObject', new Object(['a' => 'prop']));

$object->get('key');
// Returns instance of a Str object;

$object->get('key')->value();
// Returns the raw value 'value';

$object->json();
// Returns the json value
```

