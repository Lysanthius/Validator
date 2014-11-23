<?php

namespace AVW\Validator;

/**
 * Class ArrayValidator
 * @package AVW\Validator
 */
class ArrayValidator
{
    const COMPARE_EQUAL             = '==';
    const COMPARE_HIGHER            = '>';
    const COMPARE_LOWER             = '<';
    const COMPARE_HIGHER_OR_EQUAL   = '>=';
    const COMPARE_LOWER_OR_EQUAL    = '<=';

    /**
     * @param $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEmpty($array)
    {
        if(!is_array($array))
            throw new \Exception("The parameter has to be an array.");

        if(empty($array))
            return true;
        else
            return false;
    }

    /**
     * @param $array
     * @param $int
     * @param $comparator
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function compare($array, $int, $comparator)
    {
        if(!is_array($array) || !is_int($int))
            throw new \Exception("The first parameter has to be an array, the second an int.");

        if(!in_array($comparator, [
            self::COMPARE_EQUAL,
            self::COMPARE_HIGHER,
            self::COMPARE_HIGHER_OR_EQUAL,
            self::COMPARE_LOWER,
            self::COMPARE_LOWER_OR_EQUAL
        ]))
            throw new \Exception("Third argument has to be a valid comparator.");

        $arrayLength = count($array);

        switch ($comparator) {
            case self::COMPARE_EQUAL:
                return $arrayLength == $int;
                break;

            case self::COMPARE_HIGHER:
                return $arrayLength > $int;
                break;

            case self::COMPARE_HIGHER_OR_EQUAL:
                return $arrayLength >= $int;
                break;

            case self::COMPARE_LOWER:
                return $arrayLength < $int;
                break;

            case self::COMPARE_LOWER_OR_EQUAL:
                return $arrayLength <= $int;
                break;
        }
    }

    /**
     * @param $array
     * @param $min
     * @param $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsBetween($array, $min, $max)
    {
        if(!is_array($array) || !is_int($min) || !is_int($max))
            throw new \Exception("The first parameter has to be an array, the two other int.");

        if($min >= $max)
            throw new \Exception('You have to enter the minimum and then the maximum.');

        $arrayLength = count($array);

        if($arrayLength >= $min && $arrayLength <= $max)
            return true;
        else
            return false;
    }

    /**
     * @param $array
     * @param $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function keyExists($array, $key)
    {
        if(!is_array($array))
            throw new \Exception("The first parameter has to be an array.");

        if(array_key_exists($key, $array))
            return true;
        else
            return false;
    }

    /**
     * @param $array
     * @param $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function valueExists($array, $value)
    {
        if(!is_array($array) || !is_string($value))
            throw new \Exception("The first parameter has to be an array, the second a string.");

        if(in_array($value, $array))
            return true;
        else
            return false;
    }
} 