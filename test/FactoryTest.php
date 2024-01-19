<?php

namespace WordSearch\Test;

use WordSearch\Factory;
use WordSearch\Alphabet\English;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        // get the english alphabet
        $alphabet = new English();
        $this->assertInstanceOf(
            '\\WordSearch\\Puzzle',
            Factory::create(['foo', 'bar'], 15, $alphabet)
        );
    }
}
