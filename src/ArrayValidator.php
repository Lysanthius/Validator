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
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEmpty($array)
    {
        if(!is_array($array))
            throw new \Exception("The parameter has to be an array.");

        return (empty($array)) ? true : false;
    }

    /**
     * @param array $array
     * @param int $int
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

            case self::COMPARE_HIGHER:
                return $arrayLength > $int;

            case self::COMPARE_HIGHER_OR_EQUAL:
                return $arrayLength >= $int;

            case self::COMPARE_LOWER:
                return $arrayLength < $int;

            case self::COMPARE_LOWER_OR_EQUAL:
                return $arrayLength <= $int;
        }
    }

    /**
     * @param array $array
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsBetween($array, $min, $max)
    {
        if(!is_array($array) || !is_int($min) || !is_int($max))
            throw new \Exception("The first parameter has to be an array, the two others int.");

        if($min >= $max)
            throw new \Exception('You have to enter the minimum and then the maximum.');

        $arrayLength = count($array);

        return ($arrayLength >= $min && $arrayLength <= $max) ? true : false;
    }

    /**
     * @param array $array
     * @param string $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function keyExists($array, $key)
    {
        if(!is_array($array))
            throw new \Exception("The first parameter has to be an array.");

        return (array_key_exists($key, $array)) ? true : false;
    }

    /**
     * @param array $array
     * @param string $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function valueExists($array, $value)
    {
        if(!is_array($array) || !is_string($value))
            throw new \Exception("The first parameter has to be an array, the second a string.");

        return (in_array($value, $array)) ? true : false;
    }
} 