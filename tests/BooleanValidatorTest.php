<?php

namespace Tests\AVW\Validator;

use AVW\Validator\BooleanValidator;

/**
 * Class BooleanValidatorTest
 * @package Tests\AVW\Validator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check that the parameter is a true boolean
     *
     * @throws \Exception
     */
    public function testIsTrue()
    {
        $bool = true;

        $result = BooleanValidator::isTrue($bool);

        $this->assertEquals($result, true);
    }

    /**
     * Check that the parameter is a false boolean
     *
     * @throws \Exception
     */
    public function testIsFalse()
    {
        $bool = false;

        $result = BooleanValidator::isFalse($bool);

        $this->assertEquals($result, true);
    }
} 