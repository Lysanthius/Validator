<?php

namespace AVW\Validator;

/**
 * Class IntegerValidator
 * @package AVW\Validator
 */
class IntegerValidator
{
    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($a, $b)
    {
        if (!is_int($a) || !is_int($b))
            throw new \Exception('The two parameters have to be integer.');

        return ($a == $b) ? true : false;
    }

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function higher($a, $b)
    {
        if (!is_int($a) || !is_int($b))
            throw new \Exception('The two parameters have to be integer.');

        return ($a > $b) ? true : false;
    }

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lower($a, $b)
    {
        if (!is_int($a) || !is_int($b))
            throw new \Exception('The two parameters have to be integer.');

        return ($a < $b) ? true : false;
    }

    /**
     * @param int $a
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function between($a, $min, $max)
    {
        if (!is_int($a) || !is_int($min) || !is_int($max))
            throw new \Exception('The three parameters have to be integer.');

        if($min >= $max)
            throw new \Exception('You have to enter the minimum and then the maximum.');

        return ($a >= $min && $a <= $max) ? true : false;
    }

    /**
     * @param int $a
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($a)
    {
        if (!is_int($a))
            throw new \Exception('The parameter have to be an integer.');

        return ($a < 0) ? true : false;
    }

    /**
     * @param int $a
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($a)
    {
        if (!is_int($a))
            throw new \Exception('The parameter have to be an integer.');

        return ($a > 0) ? true : false;
    }
}