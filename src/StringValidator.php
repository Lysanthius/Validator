<?php

namespace AVW\Validator;

/**
 * Class StringValidator
 * @package AVW\Validator
 */
class StringValidator
{
    /**
     * @param string $string
     * @param int $length
     *
     * @return bool|\Exception
     */
    public static function hasLength($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            return new \Exception('The first parameter has to be a string, the second an int.');

        if(mb_strlen($string) == $length)
            return true;
        else
            return false;
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool|\Exception
     */
    public static function lengthHigher($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            return new \Exception('The first parameter has to be a string, the second an int.');

        if(mb_strlen($string) > $length)
            return true;
        else
            return false;
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool|\Exception
     */
    public static function lengthLower($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            return new \Exception('The first parameter has to be a string, the second an int.');

        if(mb_strlen($string) < $length)
            return true;
        else
            return false;
    }

    /**
     * @param string $string
     * @param int $min
     * @param int $max
     *
     * @return bool|\Exception
     */
    public static function lengthBetween($string, $min, $max)
    {
        if(!is_string($string) || !is_int($min) || !is_int($max))
            return new \Exception('The first parameter has to be a string, the second and the third int.');

        $stringLength = mb_strlen($string);

        if($stringLength >= $min && $stringLength <= $max)
            return true;
        else
            return false;
    }

    /**
     * @param string $string
     *
     * @return bool|\Exception
     */
    public static function noWhiteSpace($string)
    {
        if(!is_string($string))
            return new \Exception('The parameter has to be a string.');

        if (!preg_match('/\s/',$string))
            return true;
        else
            return false;
    }

    /**
     * @param string $string
     *
     * @return bool|\Exception
     */
    public static function noWhiteSpaceStartEnd($string)
    {
        if(!is_string($string))
            return new \Exception('The parameter has to be a string.');

        if(trim($string) == $string)
            return true;
        else
            return false;
    }
} 