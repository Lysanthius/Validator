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
        if (!(is_int($a)) || !(is_int($b)))
            throw new \Exception('The two parameters have to be integer.');

        if ($a == $b)
            return true;
        else
            return false;
    }

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function higher ($a, $b)
    {
        if (!(is_int($a)) || !(is_int($b)))
            throw new \Exception('The two parameters have to be integer.');

        if ($a > $b)
            return true;
        else
            return false;
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
        if (!(is_int($a)) || !(is_int($b)))
            throw new \Exception('The two parameters have to be integer.');

        if ($a < $b)
            return true;
        else
            return false;
    }

    /**
     * @param int $a
     * @param int $b
     * @param int $c
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function between($a, $b, $c)
    {
        if (!(is_int($a)) || !(is_int($b)) || !(is_int($c)))
            throw new \Exception('The three parameters have to be integer.');

        if ($a >= $b && $a <= $c)
            return true;
        else
            return false;
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
        if (!(is_int($a)))
            throw new \Exception('The parameter have to be an integer.');

        if ($a < 0)
            return true;
        else
            return false;
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
        if (!(is_int($a)))
            throw new \Exception('The parameter have to be an integer.');

        if ($a > 0)
            return true;
        else
            return false;
    }
} 