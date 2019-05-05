<?php

namespace App\Helpers;

interface Tokenizer
{
    /**
     * @param $string
     * @return string[]
     */
    public function tokenize($string);
}