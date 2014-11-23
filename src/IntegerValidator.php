<?php

class IntegerValidator
{
    public static function equal($a, $b)
    {
        if ($a == $b)
            return true;
        else
            return false;
    }

    public static function higher ($a, $b)
    {
        if ($a > $b)
            return true;
        else
            return false;
    }

    public static function lower($a, $b)
    {
        if ($a < $b)
            return true;
        else
            return false;
    }

    public static function between($a, $b, $c)
    {
        if ($a >= $b && $a <= $c)
            return true;
        else
            return false;
    }

    public static function negative($a, $b)
    {

    }

    public static function positive($a, $b)
    {

    }

} 