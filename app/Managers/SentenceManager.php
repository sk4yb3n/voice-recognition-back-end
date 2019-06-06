<?php

namespace App\Managers;

use App\Helpers\Tokenizer;

class SentenceManager implements Tokenizer
{
    /**
     * Tokenize sentence which user said.
     *
     * @param $string
     * @return array
     */
    public function tokenize($string)
    {
        $sentence = $string;

        // Python script NLTK
        $output = shell_exec(env('PYTHON_ENV') . ' ' . env('PYTHON_SCRIPT_FILE_PATH') . ' "' . $sentence . '"');

        return $output;
    }

    /**
     * @param $string
     * @return array|mixed
     */
    public function tokenizeBackup($string) {
        $result = preg_match_all('/([[:alpha:]а-яА-Я]+|[[:digit:]]+|[^[:alpha:][:digit:][:space:]])/u', $string, $matches);
        return $result ? $matches[1] : [];
    }
}