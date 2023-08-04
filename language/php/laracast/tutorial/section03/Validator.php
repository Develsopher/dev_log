<?php

class Validator
{
    // public function string($value)
    // {
    //     return strlen(trim($value)) === 0;
    // }

    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}