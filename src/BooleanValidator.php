<?php

namespace AVW\Validator;

/**
 * Class BooleanValidator
 * @package AVW\Validator
 */
class BooleanValidator
{
    /**
     * @param $bool
     *
     * @return bool|\Exception
     */
    public static function isTrue($bool)
    {
        if (!(is_bool($bool)))
            return new \Exception("The parameter have to be a boolean.");

        if($bool)
            return true;
        else
            return false;
    }

    /**
     * @param $bool
     *
     * @return bool|\Exception
     */
    public static function isFalse($bool)
    {
        if (!(is_bool($bool)))
            return new \Exception("The parameter have to be a boolean.");

        if(!$bool)
            return true;
        else
            return false;
    }
} 