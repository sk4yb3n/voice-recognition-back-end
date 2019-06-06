<?php

namespace App\Helpers;

class StringHelper
{
    public function similar(string $first, string $second)
    {
        similar_text($first, $second, $percent);

        return $percent > 60;
    }
}