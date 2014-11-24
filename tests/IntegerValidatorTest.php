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
    public function testEqual()
    {
        $a = rand(0,100);

        $result = IntegerValidator::equal($a, $a);

        $this->assertTrue($result);
    }

    /**
     * Check is the first number is higher than the second
     *
     * @throws \Exception
     */
    public function testHigher()
    {
        $a = rand(0,10);
        $b = rand(11,20);

        $result = IntegerValidator::higher($b, $a);

        $this->assertTrue($result);
    }

    /**
     * Check is the first number is lower than the second
     *
     * @throws \Exception
     */
    public function testLower()
    {
        $a = rand(0,10);
        $b = rand(11,20);

        $result = IntegerValidator::lower($a, $b);

        $this->assertTrue($result);
    }

    /**
     * Check if the number is between the two others
     *
     * @throws \Exception
     */
    public function testBetween()
    {
        $a = rand(0,10);
        $b = rand(11,20);
        $c = rand(21,30);

        $result = IntegerValidator::between($b, $a, $c);

        $this->assertTrue($result);
    }

    /**
     * Check if the number is negative
     *
     * @throws \Exception
     */
    public function testNegative()
    {
        $a = rand(-2, -50);

        $result = IntegerValidator::negative($a);

        $this->assertTrue($result);
    }

    /**
     * Check if the number is positive
     *
     * @throws \Exception
     */
    public function testPositive()
    {
        $a = rand(1,50);

        $result = IntegerValidator::positive($a);

        $this->assertTrue($result);
    }
} 