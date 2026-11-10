# peppec-php-test

A minimal PHP project used to test the `php-v1` preset of [PEPPEC](https://github.com/PeppeColi/peppec).

## API

### `Stats::sum`

Returns the sum of a list of integers, or `0` for an empty list.

```php
use PeppecPhpTest\Stats;

Stats::sum([1, 2, 3]); // 6
```

### `Stats::average`

Returns the arithmetic mean of a list of integers as a float. Throws an `InvalidArgumentException` for an empty list.

```php
use PeppecPhpTest\Stats;

Stats::average([1, 2, 3, 4]); // 2.5
```

### `Env::load`

Reads a `KEY=VALUE` file into an array. Empty lines and lines starting with `#` are skipped.

```php
use PeppecPhpTest\Env;

Env::load('.env.testing'); // ['APP_GREETING' => 'hello']
```

## Development

```bash
composer install
cp .env.testing.example .env.testing
vendor/bin/phpunit
```
