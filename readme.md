Word Search
===========

[![Build Status](https://travis-ci.org/xmeltrut/WordSearch.svg?branch=master)](https://travis-ci.org/xmeltrut/WordSearch)
[![Latest Stable Version](https://poser.pugx.org/xmeltrut/word-search/v/stable)](https://packagist.org/packages/xmeltrut/word-search)
[![License](https://poser.pugx.org/xmeltrut/word-search/license)](https://packagist.org/packages/xmeltrut/word-search)

Word search generator written in PHP.

Features:

* Supports multiple words and grid sizes
* Supports horizontal and vertical words
* Supports intersecting words
* English, Hebrew, Arabic and Finnish alphabets

Produces a grid for you to output, and list of answers.

    HHEOÖ
    EÖBAR
    LSJFD
    LLTOK
    OPÖOU

Install
-------

Install via Composer:

```bash
$ composer require sanderspaas/word-search "^1.0"
```

Usage
-----

In English:

    use WordSearch\Factory;
    use WordSearch\Alphabet\English;

    $puzzle = Factory::create(['foo', 'bar'], 15, new English);

In Hebrew with reversing the words:

    use WordSearch\Factory;
    use WordSearch\Alphabet\Hebrew;

    $puzzle = Factory::create(['אבג', 'דהו'], 15, new Hebrew, true);

The `Puzzle` object contains a `toArray` method for the puzzle grid
and an iterable `WordList` object with the answers in. You can use these
to output the puzzle yourself, or use the HTML transformer.

    $transformer = new WordSearch\Transformer\HtmlTransformer($puzzle);
    echo $transformer->grid();
    echo $transformer->wordList();

Development
-----------

Tests can be run via Ant:

    ant


## Credits

This package is a fork of [xmeltrut's Word Search](https://github.com/xmeltrut/WordSearch).