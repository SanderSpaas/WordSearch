<?php

namespace WordSearch;

class Factory
{
    /**
     * Create a puzzle.
     *
     * @param array   $words List of words.
     * @param integer $size  Grid size.
     * @param Alphabet  $alphabet Alphabet to use.
     * @param boolean $reverseWords Reverse words.
     * @return Puzzle
     */
    public static function create(array $words, $size = 15, $alphabet, $reverseWords = false)
    {
        $generator = new Generator($words, $size, $alphabet, $reverseWords);
        return $generator->generate();
    }
}
