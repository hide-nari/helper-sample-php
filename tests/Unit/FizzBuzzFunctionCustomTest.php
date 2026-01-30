<?php

use Hidenari\HelperSample\HelperCustom;

test('helper custom file fizzBuzz custom function test int pattern',
    function (string $args, int|string $result) {
        expect(new HelperCustom()->fizzBuzz($args) === $result)->toBeTrue();
    })
    ->with([
        ['-30', 'FIZZBUZZ'],
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
        ['0', 'FIZZBUZZ'],
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
        ['30', 'FIZZBUZZ'],
    ]);

test('helper custom file fizzBuzz function test float pattern',
    function (string $args, int|string $result) {
        expect(new HelperCustom()->fizzBuzz($args) === $result)->toBeTrue();
    })
    ->with([
        ['-30.0', 'FIZZBUZZ'],
        ['-30.1', 'FIZZBUZZ'],
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
        ['0.0', 'FIZZBUZZ'],
        ['0.1', 'FIZZBUZZ'],
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
        ['30.0', 'FIZZBUZZ'],
        ['30.1', 'FIZZBUZZ'],
    ]);

test('helper custom file fizzBuzz function test bool error pattern',
    function (bool $args) {
        (void) new HelperCustom()->fizzBuzz($args);
    })
    ->with([
        [true],
        [false],
    ])
    ->throws(TypeError::class);

test('helper custom file fizzBuzz function test etc error pattern',
    function (null|string|array $args) {
        (void) new HelperCustom()->fizzBuzz($args);
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
