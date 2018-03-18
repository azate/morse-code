# Morse code
[![License](https://poser.pugx.org/azate/morse-code/license)](https://packagist.org/packages/azate/morse-code)
[![Latest Stable Version](https://poser.pugx.org/azate/morse-code/v/stable)](https://packagist.org/packages/azate/morse-code)
[![Total Downloads](https://poser.pugx.org/azate/morse-code/downloads)](https://packagist.org/packages/azate/morse-code)

This package allows you to encode or decode morse code messages.

## Installation
Require this package with composer.
```shell
composer require azate/morse-code
```

## Encoding
If you wish to encode your message you can use the encode method.

```php
use Azate\MorseCode\MorseCode;

echo (new MorseCode)->encode('hi');
```

## Decoding
If you wish to decode your message you can use the decode method.

```php
use Azate\MorseCode\MorseCode;

echo (new MorseCode)->decode('.... ..');
```