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
     * Check the return true if the parameter is a true boolean
     *
     * @throws \Exception
     */
    public function testIsTrueTrue()
    {
        $result = BooleanValidator::isTrue(true);

        $this->assertTrue($result);;
    }

    /**
     * Check the return false if the parameter isn't a true boolean
     *
     * @throws \Exception
     */
    public function testIsTrueFalse()
    {
        $result = BooleanValidator::isTrue(false);

        $this->assertFalse($result);;
    }

    /**
     * Check the return true if the parameter is a false boolean
     *
     * @throws \Exception
     */
    public function testIsFalseTrue()
    {
        $result = BooleanValidator::isFalse(false);

        $this->assertTrue($result);
    }

    /**
     * Check the return false if the parameter isn't a false boolean
     *
     * @throws \Exception
     */
    public function testIsFalseFalse()
    {
        $result = BooleanValidator::isFalse(true);

        $this->assertFalse($result);
    }
} 