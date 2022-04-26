<?php

namespace App;

class NumericKeyboardDecoder
{
    private $phase;

    public function __construct($phase)
    {
        $this->phase = $phase;
    }

    public function decode(): string
    {
        $output = '';
        $decodeMapper = new DecodeMapper();
        $letters = str_split($this->phase);
        foreach ($letters as $letter)
        {
            $output .= $decodeMapper->at($letter);
        }
        return $output;
    }
}