<?php

use Hidenari\HelperSample\Helper;
use Hidenari\HelperSample\HelperTrait;

use function Hidenari\HelperSample\fizzBuzz;

$trait = new class
{
    use HelperTrait;
};

test('helper file fizzBuzz function test int pattern',
    function (string $args, int|string $result) use ($trait) {
        expect(fizzBuzz($args) === $result)->toBeTrue();
        expect($trait->fizzBuzz($args) === $result)->toBeTrue();
        expect(new Helper()->fizzBuzz($args) === $result)->toBeTrue();
    })
    ->with([
        ['-30', 'fizzbuzz'],
        ['-15', 'fizzbuzz'],
        ['-14', -14],
        ['-13', -13],
        ['-12', 'fizz'],
        ['-11', -11],
        ['-10', 'buzz'],
        ['-9', 'fizz'],
        ['-8', -8],
        ['-7', -7],
        ['-6', 'fizz'],
        ['-5', 'buzz'],
        ['-4', -4],
        ['-3', 'fizz'],
        ['-2', -2],
        ['-1', -1],
        ['0', 'fizzbuzz'],
        ['1', 1],
        ['2', 2],
        ['3', 'fizz'],
        ['4', 4],
        ['5', 'buzz'],
        ['6', 'fizz'],
        ['7', 7],
        ['8', 8],
        ['9', 'fizz'],
        ['10', 'buzz'],
        ['11', 11],
        ['12', 'fizz'],
        ['13', 13],
        ['14', 14],
        ['15', 'fizzbuzz'],
        ['30', 'fizzbuzz'],
    ]);

test('helper file fizzBuzz function test float pattern',
    function (string $args, int|string $result) use ($trait) {
        expect(fizzBuzz($args) === $result)->toBeTrue();
        expect($trait->fizzBuzz($args) === $result)->toBeTrue();
        expect(new Helper()->fizzBuzz($args) === $result)->toBeTrue();
    })
    ->with([
        ['-30.0', 'fizzbuzz'],
        ['-30.1', 'fizzbuzz'],
        ['-15.0', 'fizzbuzz'],
        ['-15.1', 'fizzbuzz'],
        ['-5.0', 'buzz'],
        ['-5.1', 'buzz'],
        ['-4.0', -4],
        ['-4.1', -4],
        ['-3.0', 'fizz'],
        ['-3.1', 'fizz'],
        ['-2.0', -2],
        ['-2.1', -2],
        ['-1.0', -1],
        ['-1.1', -1],
        ['0.0', 'fizzbuzz'],
        ['0.1', 'fizzbuzz'],
        ['1.0', 1],
        ['1.1', 1],
        ['2.0', 2],
        ['2.1', 2],
        ['3.0', 'fizz'],
        ['3.1', 'fizz'],
        ['4.0', 4],
        ['4.1', 4],
        ['5.0', 'buzz'],
        ['5.1', 'buzz'],
        ['15.0', 'fizzbuzz'],
        ['15.1', 'fizzbuzz'],
        ['30.0', 'fizzbuzz'],
        ['30.1', 'fizzbuzz'],
    ]);

test('helper file fizzBuzz function test bool error pattern',
    function (bool $args) use ($trait) {
        (void) fizzBuzz($args);
        $trait->fizzBuzz($args);
        new Helper()->fizzBuzz($args);
    })
    ->with([
        [true],
        [false],
    ])
    ->throws(TypeError::class);

test('helper file fizzBuzz function test etc error pattern',
    function (null|string|array $args) use ($trait) {
        (void) fizzBuzz($args);
        $trait->fizzBuzz($args);
        new Helper()->fizzBuzz($args);
    })
    ->with([
        [null],
        ['str'],
        ['str123'],
        ['1st'],
        [[1, 2, 3]],
        new stdClass,
        (object) ['name' => 'taro'],
        new class
        {
            public $name = 'taro';
        },
    ])
    ->throws(TypeError::class);
