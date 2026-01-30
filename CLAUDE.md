# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

PHP 8.5 library (`hidenari/helper-sample`) implementing FizzBuzz with a base and custom variant. Pure PHP with no runtime dependencies.

## Commands

```bash
# Install dependencies
composer install

# Run tests (Pest framework)
./vendor/bin/pest

# Run tests with coverage
herd coverage ./vendor/bin/pest --coverage

# Code formatting
./vendor/bin/pint

# Static analysis (max strictness)
./vendor/bin/phpstan analyse src --level=10
```

## Architecture

- **`src/Helper.php`** — Standalone `fizzBuzz()` function and `Helper` class (via `HelperTrait`). Returns "fizz" (÷3), "buzz" (÷5), "fizzbuzz" (÷15), or the number itself. Accepts int|float.
- **`src/HelperCustom.php`** — Extends `Helper`, overrides fizzBuzz to return uppercase result when divisible by 30 (e.g., 30 → "FIZZBUZZ"). Uses PHP 8.5 pipe operator (`|>`).
- **`tests/`** — Pest test suites with parameterized tests covering integers, floats, and invalid input types.

## PHP 8.5 Features in Use

This project uses modern PHP features: `#[NoDiscard]`, `#[Override]` attributes, first-class callable syntax (`strtoupper(...)`), pipe operator (`|>`), and strict types throughout.
