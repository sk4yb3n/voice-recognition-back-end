<?php

namespace App\Managers;

use App\Helpers\Tokenizer;

class SentenceManager implements Tokenizer
{
    /**
     * @param $string
     * @return string[]
     */
    public function tokenize($string)
    {
        $result = preg_match_all('/([[:alpha:]а-яА-Я]+|[[:digit:]]+|[^[:alpha:][:digit:][:space:]])/u', $string, $matches);
        return $result ? $matches[1] : [];
    }
}