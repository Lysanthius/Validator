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
    public function testHasLength()
    {
        $string = "azertyuiop";
        $length = mb_strlen($string);

        $result = StringValidator::hasLength($string, $length);

        $this->assertEquals($result, true);
    }

    /**
     * Check if the string's length is higher to the length
     *
     * @throws \Exception
     */
    public function testLengthHigher()
    {
        $string = "azertyuiop";
        $length = (mb_strlen($string)-5);

        $result = StringValidator::lengthHigher($string, $length);

        $this->assertEquals($result, true);
    }

    /**
     * Check if the string's length is lower to the length
     *
     * @throws \Exception
     */
    public function testLengthLower()
    {
        $string = "azertyuiop";
        $length = (mb_strlen($string)+5);

        $result = StringValidator::lengthLower($string, $length);

        $this->assertEquals($result, true);
    }

    /**
     * Check if the string's length is between the two lengths
     *
     * @throws \Exception
     */
    public function testLengthBetween()
    {
        $string = "azertyuiop";
        $length = mb_strlen($string);

        $result = StringValidator::lengthBetween($string, $length - 5, $length + 5);

        $this->assertEquals($result, true);
    }

    /**
     * Check if the string contains no white space
     *
     * @throws \Exception
     */
    public function testNoWhiteSpace()
    {
        $string = "azertyuiop";

        $result = StringValidator::noWhiteSpace($string);

        $this->assertEquals($result, true);
    }

    /**
     * Check if the string has no white space at the beginning and at the end
     *
     * @throws \Exception
     */
    public function testNoWhiteSpaceStartEnd()
    {
        $string = "azertyuiop";

        $result = StringValidator::noWhiteSpaceStartEnd($string);

        $this->assertEquals($result, true);
    }
}