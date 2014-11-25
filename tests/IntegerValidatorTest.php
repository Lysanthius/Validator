<?php

namespace Tests\AVW\Validator;

use AVW\Validator\IntegerValidator;

/**
 * Class IntegerValidatorTest
 * @package Tests\AVW\Validator
 */
class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
 * Check if the numbers are equal
 *
 * @throws \Exception
 */
    public function testEqualTrue()
    {
        $a = rand(0,100);

        $result = IntegerValidator::equal($a, $a);

        $this->assertTrue($result);
    }

    /**
     * Check if the numbers aren't equal
     *
     * @throws \Exception
     */
    public function testEqualFalse()
    {
        $a = rand(0,100);
        $b = rand(101, 200);

        $result = IntegerValidator::equal($a, $b);

        $this->assertFalse($result);
    }

    /**
     * Check is the first number is higher than the second
     *
     * @throws \Exception
     */
    public function testHigherTrue()
    {
        $a = rand(0,10);
        $b = rand(11,20);

        $result = IntegerValidator::higher($b, $a);

        $this->assertTrue($result);
    }

    /**
     * Check is the first number isn't higher than the second
     *
     * @throws \Exception
     */
    public function testHigherFalse()
    {
        $a = rand(0,10);
        $b = rand(11,20);

        $result = IntegerValidator::higher($a, $b);

        $this->assertFalse($result);
    }

    /**
     * Check is the first number is lower than the second
     *
     * @throws \Exception
     */
    public function testLowerTrue()
    {
        $a = rand(0,10);
        $b = rand(11,20);

        $result = IntegerValidator::lower($a, $b);

        $this->assertTrue($result);
    }

    /**
     * Check is the first number isn't lower than the second
     *
     * @throws \Exception
     */
    public function testLowerFalse()
    {
        $a = rand(0,10);
        $b = rand(11,20);

        $result = IntegerValidator::lower($b, $a);

        $this->assertFalse($result);
    }

    /**
     * Check if the number is between the two others
     *
     * @throws \Exception
     */
    public function testBetweenTrue()
    {
        $a = rand(0,10);
        $b = rand(11,20);
        $c = rand(21,30);

        $result = IntegerValidator::between($b, $a, $c);

        $this->assertTrue($result);
    }

    /**
     * Check if the number isn't between the two others
     *
     * @throws \Exception
     */
    public function testBetweenFalse()
    {
        $a = rand(0,10);
        $b = rand(11,20);
        $c = rand(21,30);

        $result = IntegerValidator::between($a, $b, $c);

        $this->assertFalse($result);
    }

    /**
     * Check if the number is negative
     *
     * @throws \Exception
     */
    public function testNegativeTrue()
    {
        $a = rand(-2, -50);

        $result = IntegerValidator::negative($a);

        $this->assertTrue($result);
    }

    /**
     * Check if the number isn't negative
     *
     * @throws \Exception
     */
    public function testNegativeFalse()
    {
        $a = rand(2, 50);

        $result = IntegerValidator::negative($a);

        $this->assertFalse($result);
    }

    /**
     * Check if the number is positive
     *
     * @throws \Exception
     */
    public function testPositiveTrue()
    {
        $a = rand(1,50);

        $result = IntegerValidator::positive($a);

        $this->assertTrue($result);
    }

    /**
     * Check if the number isn't positive
     *
     * @throws \Exception
     */
    public function testPositiveFalse()
    {
        $a = rand(-1, -50);

        $result = IntegerValidator::positive($a);

        $this->assertFalse($result);
    }
} 