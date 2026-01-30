<?php

namespace Hidenari\HelperSample;

use NoDiscard;
use Override;

class HelperCustom extends Helper
{
    #[Override, NoDiscard]
    public function fizzBuzz(int|float|bool $number): int|string
    {
        $result = parent::fizzBuzz($number);

        return
            (int) $number % 30 === 0
                ? $result |> strtoupper(...) : $result;
    }
}
