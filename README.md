# filter-and-reindex

A minimal yet expressive PHP utility function that filters an array and reindexes the result.  
Originally proposed in [laravel/framework#56182](https://github.com/laravel/framework/pull/56182).

## Why?

In PHP, it's common to filter an array and reset its numeric keys using:

```php
array_values(array_filter($array));
```

This helper simplifies the idiom into one clean function:

```php
filter_and_reindex($array);
```

### Benefits

- Improves readability in transformation chains
- Prevents forgetting to reset keys after filtering
- Encourages functional composition

## Installation

```bash
composer require your-vendor/filter-and-reindex
```

> Replace `your-vendor` with your actual Composer vendor name.

## Usage

### Basic usage

```php
use function FilterAndReindex\filter_and_reindex;

$data = ['foo', null, 'bar'];

$result = filter_and_reindex($data);

// ['foo', 'bar']
```

### With custom callback

```php
$data = [1, 2, 3, 4];

$result = filter_and_reindex($data, fn ($v) => $v % 2 === 0);

// [2, 4]
```

## API

```php
filter_and_reindex(array $array, ?callable $callback = null): array
```

| Parameter   | Type              | Description                                              |
|-------------|-------------------|----------------------------------------------------------|
| `$array`    | `array`           | The input array                                          |
| `$callback` | `callable|null`   | Optional filter callback. Defaults to `boolval`          |
| Returns     | `array`           | The filtered and reindexed array (via `array_values()`)  |

## Comparison with Laravel Collections

Laravel provides a similar transformation via Collections:

```php
collect($array)->filter()->values()->all();
```

This package offers a lightweight, framework-agnostic alternative — ideal for utility-layer or package development.

## Testing

```bash
composer test
```

Or, if PHPUnit is installed:

```bash
./vendor/bin/phpunit
```
