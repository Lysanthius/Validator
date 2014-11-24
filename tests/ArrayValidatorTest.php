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
     * Check if the array is empty
     *
     * @throws \Exception
     */
    public function testIsEmpty()
    {
        $array = [];

        $result = ArrayValidator::isEmpty($array);

        $this->assertTrue($result);
    }

    /**
     * Check if the array has this length
     *
     * @throws \Exception
     */
    public function testCompare()
    {
        $array = ['pomme' => 'verte', 'poire' => 'jaune'];

        $result = ArrayValidator::compare($array, 2, ArrayValidator::COMPARE_EQUAL);

        $this->assertTrue($result);
    }

    /**
     * Check if the array's length is between the two numbers
     *
     * @throws \Exception
     */
    public function testNumberElementsBetween()
    {
        $array = ['pomme' => 'verte', 'poire' => 'jaune', 'orange' => 'orange'];

        $result = ArrayValidator::numberElementsBetween($array, 1, 4);

        $this->assertTrue($result);
    }

    /**
     * Check if the key is in the array
     *
     * @throws \Exception
     */
    public function testKeyExists()
    {
        $array = ['chocolat' => 'noir'];

        $result = ArrayValidator::keyExists($array, 'chocolat');

        $this->assertTrue($result);
    }

    /**
     * Check if the value is in the array
     *
     * @throws \Exception
     */
    public function testValueExists()
    {
        $array = ['chocolat' => 'blanc'];

        $result = ArrayValidator::valueExists($array, 'blanc');

        $this->assertTrue($result);
    }
} 