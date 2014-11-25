<?php

namespace Tests\AVW\Validator;

use AVW\Validator\StringValidator;

/**
 * Class StringValidatorTest
 * @package Tests\AVW\Validator
 */
class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check if the string has this length
     *
     * @throws \Exception
     */
    public function testHasLengthTrue()
    {
        $string = "azertyuiop";
        $length = mb_strlen($string);

        $result = StringValidator::hasLength($string, $length);

        $this->assertTrue($result);
    }

    /**
     * Check if the string hasn't this length
     *
     * @throws \Exception
     */
    public function testHasLengthFalse()
    {
        $string = "azertyuiop";
        $length = mb_strlen($string) + 2;

        $result = StringValidator::hasLength($string, $length);

        $this->assertFalse($result);
    }

    /**
     * Check if the string's length is higher to the length
     *
     * @throws \Exception
     */
    public function testLengthHigherTrue()
    {
        $string = "azertyuiop";
        $length = (mb_strlen($string)-5);

        $result = StringValidator::lengthHigher($string, $length);

        $this->assertTrue($result);
    }

    /**
     * Check if the string's length isn't higher to the length
     *
     * @throws \Exception
     */
    public function testLengthHigherFalse()
    {
        $string = "azertyuiop";
        $length = (mb_strlen($string)+5);

        $result = StringValidator::lengthHigher($string, $length);

        $this->assertFalse($result);
    }

    /**
     * Check if the string's length is lower to the length
     *
     * @throws \Exception
     */
    public function testLengthLowerTrue()
    {
        $string = "azertyuiop";
        $length = (mb_strlen($string)+5);

        $result = StringValidator::lengthLower($string, $length);

        $this->assertTrue($result);
    }

    /**
     * Check if the string's length isn't lower to the length
     *
     * @throws \Exception
     */
    public function testLengthLowerFalse()
    {
        $string = "azertyuiop";
        $length = (mb_strlen($string)-5);

        $result = StringValidator::lengthLower($string, $length);

        $this->assertFalse($result);
    }

    /**
     * Check if the string's length is between the two lengths
     *
     * @throws \Exception
     */
    public function testLengthBetweenTrue()
    {
        $string = "azertyuiop";
        $length = mb_strlen($string);

        $result = StringValidator::lengthBetween($string, $length - 5, $length + 5);

        $this->assertTrue($result);
    }

    /**
     * Check if the string's length isn't between the two lengths
     *
     * @throws \Exception
     */
    public function testLengthBetweenFalse()
    {
        $string = "azertyuiop";
        $length = mb_strlen($string);

        $result = StringValidator::lengthBetween($string, $length + 5, $length + 10);

        $this->assertFalse($result);
    }

    /**
     * Check if the string contains no white space
     *
     * @throws \Exception
     */
    public function testNoWhiteSpaceTrue()
    {
        $string = "azertyuiop";

        $result = StringValidator::noWhiteSpace($string);

        $this->assertTrue($result);
    }

    /**
     * Check if the string contains white space
     *
     * @throws \Exception
     */
    public function testNoWhiteSpaceFalse()
    {
        $string = "azertyuiop ";

        $result = StringValidator::noWhiteSpace($string);

        $this->assertFalse($result);
    }

    /**
     * Check if the string has no white space at the beginning and at the end
     *
     * @throws \Exception
     */
    public function testNoWhiteSpaceStartEndTrue()
    {
        $string = "azertyuiop";

        $result = StringValidator::noWhiteSpaceStartEnd($string);

        $this->assertTrue($result);
    }

    /**
     * Check if the string has white spaces at the beginning and at the end
     *
     * @throws \Exception
     */
    public function testNoWhiteSpaceStartEndFalse()
    {
        $string = " azertyuiop ";

        $result = StringValidator::noWhiteSpaceStartEnd($string);

        $this->assertFalse($result);
    }
}