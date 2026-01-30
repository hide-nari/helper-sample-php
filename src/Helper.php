<?php

namespace Hidenari\HelperSample;

use NoDiscard;
use TypeError;

class Helper
{
    use HelperTrait;
}

trait HelperTrait
{
    public function fizzBuzz(int|float|bool $number): int|string
    {
        return fizzBuzz($number);
    }
}

#[NoDiscard]
function fizzBuzz(int|float|bool $number): int|string
{
    is_bool($number) && throw new TypeError('bool type error');

    return
        ((int) $number % 3 === 0 ? 'fizz' : '').
        ((int) $number % 5 === 0 ? 'buzz' : '')
            ?: (int) $number;
}
