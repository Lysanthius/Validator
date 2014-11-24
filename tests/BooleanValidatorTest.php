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
        $result = BooleanValidator::isTrue(true);

        $this->assertTrue($result);;
    }

    /**
     * Check that the parameter is a false boolean
     *
     * @throws \Exception
     */
    public function testIsFalse()
    {
        $result = BooleanValidator::isFalse(false);

        $this->assertTrue($result);
    }
} 