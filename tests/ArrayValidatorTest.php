<?php

namespace Tests\AVW\Validator;

use AVW\Validator\ArrayValidator;

/**
 * Class ArrayValidatorTest
 * @package Tests\AVW\Validator
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check the return true if the array is empty
     *
     * @throws \Exception
     */
    public function testIsEmptyTrue()
    {
        $array = [];

        $result = ArrayValidator::isEmpty($array);

        $this->assertTrue($result);
    }

    /**
     * Check the return false if the array isn't empty
     *
     * @throws \Exception
     */
    public function testIsEmptyFalse()
    {
        $array = ['pomme' => 'poire'];

        $result = ArrayValidator::isEmpty($array);

        $this->assertFalse($result);
    }

    /**
     * Check the function with equal comparator
     *
     * @throws \Exception
     */
    public function testCompareEqual()
    {
        $array = ['pomme' => 'verte', 'poire' => 'jaune'];

        $result = ArrayValidator::compare($array, 2, ArrayValidator::COMPARE_EQUAL);

        $this->assertTrue($result);
    }

    /**
     * Check the function with higher comparator
     *
     * @throws \Exception
     */
    public function testCompareHigher()
    {
        $array = ['pomme' => 'verte', 'poire' => 'jaune'];

        $result = ArrayValidator::compare($array, 1, ArrayValidator::COMPARE_HIGHER);

        $this->assertTrue($result);
    }

    /**
     * Check the function with higher or equal comparator
     *
     * @throws \Exception
     */
    public function testCompareHigherOrEqual()
    {
        $array = ['pomme' => 'verte', 'poire' => 'jaune'];

        $result = ArrayValidator::compare($array, 1, ArrayValidator::COMPARE_HIGHER_OR_EQUAL);

        $this->assertTrue($result);
    }

    /**
     * Check the function with lower comparator
     *
     * @throws \Exception
     */
    public function testCompareLower()
    {
        $array = ['pomme' => 'verte', 'poire' => 'jaune'];

        $result = ArrayValidator::compare($array, 3, ArrayValidator::COMPARE_LOWER);

        $this->assertTrue($result);
    }

    /**
     * Check the function with lower or equal comparator
     *
     * @throws \Exception
     */
    public function testCompareLowerOrEqual()
    {
        $array = ['pomme' => 'verte', 'poire' => 'jaune'];

        $result = ArrayValidator::compare($array, 5, ArrayValidator::COMPARE_LOWER_OR_EQUAL);

        $this->assertTrue($result);
    }

    /**
     * Check the return true if the array's length is between the two numbers
     *
     * @throws \Exception
     */
    public function testNumberElementsBetweenTrue()
    {
        $array = ['pomme' => 'verte', 'poire' => 'jaune', 'orange' => 'orange'];

        $result = ArrayValidator::numberElementsBetween($array, 1, 4);

        $this->assertTrue($result);
    }

    /**
     * Check the return false if the array's length isn't between the two numbers
     *
     * @throws \Exception
     */
    public function testNumberElementsBetweenFalse()
    {
        $array = ['pomme' => 'verte', 'poire' => 'jaune', 'orange' => 'orange'];

        $result = ArrayValidator::numberElementsBetween($array, 4, 9);

        $this->assertFalse($result);
    }

    /**
     * Check the return true if the key is in the array
     *
     * @throws \Exception
     */
    public function testKeyExistsTrue()
    {
        $array = ['chocolat' => 'noir'];

        $result = ArrayValidator::keyExists($array, 'chocolat');

        $this->assertTrue($result);
    }

    /**
     * Check the return false if the key isn't in the array
     *
     * @throws \Exception
     */
    public function testKeyExistsFalse()
    {
        $array = ['chocolat' => 'noir'];

        $result = ArrayValidator::keyExists($array, 'chocolade');

        $this->assertFalse($result);
    }

    /**
     * Check the return true if the value is in the array
     *
     * @throws \Exception
     */
    public function testValueExistsTrue()
    {
        $array = ['chocolat' => 'blanc'];

        $result = ArrayValidator::valueExists($array, 'blanc');

        $this->assertTrue($result);
    }

    /**
     * Check the return false if the value isn't in the array
     *
     * @throws \Exception
     */
    public function testValueExistsFalse()
    {
        $array = ['chocolat' => 'blanc'];

        $result = ArrayValidator::valueExists($array, 'noir');

        $this->assertFalse($result);
    }
} 