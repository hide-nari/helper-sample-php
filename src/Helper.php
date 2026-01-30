<?php

declare(strict_types=1);

namespace Hidenari\HelperSample;

use NoDiscard;

class Helper
{
    use HelperTrait;
}

trait HelperTrait
{
    public function fizzBuzz(int|float $number): int|string
    {
        return fizzBuzz($number);
    }
}

#[NoDiscard]
function fizzBuzz(int|float $number): int|string
{
    return
        ((int) $number % 3 === 0 ? 'fizz' : '').
        ((int) $number % 5 === 0 ? 'buzz' : '')
            ?: (int) $number;
}
