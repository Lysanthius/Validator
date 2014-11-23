<?php

namespace AVW\Validator;

/**
 * Class BooleanValidator
 * @package AVW\Validator
 */
class BooleanValidator
{
    /**
     * @param boolean $bool
     *
     * @throws \Exception
     *
     * @return bool
     */
    public static function isTrue($bool)
    {
        if (!is_bool($bool))
            throw new \Exception("The parameter have to be a boolean.");

        if($bool)
            return true;
        else
            return false;
    }

    /**
     * @param boolean $bool
     *
     * @throws \Exception
     *
     * @return bool
     */
    public static function isFalse($bool)
    {
        if (!is_bool($bool))
            throw new \Exception("The parameter have to be a boolean.");

        if(!$bool)
            return true;
        else
            return false;
    }
} 