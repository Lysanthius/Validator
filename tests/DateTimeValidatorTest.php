<?php

namespace Tests\AVW\Validator;

use AVW\Validator\DateTimeValidator;

/**
 * Class DateTimeValidatorTest
 * @package Tests\AVW\Validator
 */
class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check with the birthday if the person is major
     */
    public function testIsMajor()
    {
        $date = new \DateTime('1990-02-02');

        $result = DateTimeValidator::isMajor($date);

        $this->assertTrue($result);
    }

    /**
     * Check if the date's year is the same than today
     *
     * @throws \Exception
     */
    public function testIsYear()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isYear($date, $date->format('Y'));

        $this->assertTrue($result);
    }

    /**
     * Check if the date's month is the same than today
     *
     * @throws \Exception
     */
    public function testIsMonth()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isMonth($date, $date->format('m'));

        $this->assertTrue($result);
    }

    /**
     * Check if the date's day is the same than today
     *
     * @throws \Exception
     */
    public function testIsDay()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isDay($date, $date->format('d'));

        $this->assertTrue($result);
    }
} 