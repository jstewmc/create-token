# create-token
A create-token service.

```php
use Jahuty\CreateToken\Create;

(new Create())(8);   // returns something like "12a8b53c"
(new Create())(16);  // returns something like "8ab5dfaef3d2c999"
```

## Security

This library uses the [random_bytes()](http://php.net/manual/en/function.random-bytes.php) PHP function. According to PHP's manual, the function generates cryptographically secure, psuedo-random, opaque tokens suitable for salts, keys, and initialization vectors. 

## Length

Keep in mind, length is important when creating an opaque token. To provide sufficient randomness, a token's length SHOULD equal the length of the hash function's output. For example, a token that's hashed via SHA-256 should be 64 characters long; a token that's hashed via SHA-512 should be 128 characters long; so on and so forth.

## License

[MIT](https://github.com/jstewmc/create-token/blob/master/LICENSE)

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## Version

### 1.0.0, August 16, 2016

* First major release

### 0.1.0, July 28, 2016

* Initial release
