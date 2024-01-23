<?php

namespace WordSearch;

/**
 * Represents a generated puzzle.
 */
class Puzzle
{
    /**
     * @var array Grid representation.
     */
    private $grid;

    /**
     * @var WordList Word list.
     */
    private $wordList;

    /**
     * Constructor.
     *
     * @param array    $grid     Grid.
     * @param WordList $wordList Word list.
     */
    public function __construct(array $grid, WordList $wordList)
    {
        $this->grid = $grid;
        $this->wordList = $wordList;
    }

    /**
     * Array representation.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->grid;
    }

    /**
     * String representation.
     *
     * @return string
     */
    public function __toString()
    {
        $str = '';

        foreach ($this->grid as $row) {
            $str .= sprintf("%s\n", implode($row));
        }

        return $str;
    }

    /**
     * Return the word list.
     *
     * @param bool $reverseWords Reverse words.
     * @return array
     */
    public function getWordList(bool $reverseWords = false)
    {
        $words = $this->wordList;

        if ($reverseWords) {
            $words = array_map(function ($word) {
                // Split the word into an array of characters
                $characters = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);

                // Reverse the array of characters
                $reversedCharacters = array_reverse($characters);

                // Join the characters to form the reversed word
                $reversedWord = implode('', $reversedCharacters);

                return $reversedWord;
            }, $words);
        }

        return $words;
    }

}
