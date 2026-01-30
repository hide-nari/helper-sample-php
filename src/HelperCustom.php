<?php

declare(strict_types=1);

namespace Hidenari\HelperSample;

use NoDiscard;
use Override;

class HelperCustom extends Helper
{
    #[Override, NoDiscard]
    public function fizzBuzz(int|float $number): int|string
    {
        $result = parent::fizzBuzz($number);

        return
            (int) $number % 30 === 0
                ? $result |> strtoupper(...) : $result;
    }
}
