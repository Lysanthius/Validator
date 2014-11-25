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
    public function testIsMajorTrue()
    {
        $date = new \DateTime('1990-02-02');

        $result = DateTimeValidator::isMajor($date);

        $this->assertTrue($result);
    }

    /**
     * Check with the birthday if the person isn't major
     */
    public function testIsMajorFalse()
    {
        $date = new \DateTime('2014-02-02');

        $result = DateTimeValidator::isMajor($date);

        $this->assertFalse($result);
    }

    /**
     * Check if the date's year is the same than today
     *
     * @throws \Exception
     */
    public function testIsYearTrue()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isYear($date, $date->format('Y'));

        $this->assertTrue($result);
    }

    /**
     * Check if the date's year isn't the same than today
     *
     * @throws \Exception
     */
    public function testIsYearFalse()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isYear($date, $date->format('m'));

        $this->assertFalse($result);
    }

    /**
     * Check if the date's month is the same than today
     *
     * @throws \Exception
     */
    public function testIsMonthTrue()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isMonth($date, $date->format('m'));

        $this->assertTrue($result);
    }

    /**
     * Check if the date's month isn't the same than today
     *
     * @throws \Exception
     */
    public function testIsMonthFalse()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isMonth($date, $date->format('Y'));

        $this->assertFalse($result);
    }

    /**
     * Check if the date's day is the same than today
     *
     * @throws \Exception
     */
    public function testIsDayTrue()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isDay($date, $date->format('d'));

        $this->assertTrue($result);
    }

    /**
     * Check if the date's day isn't the same than today
     *
     * @throws \Exception
     */
    public function testIsDayFalse()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isDay($date, $date->format('Y'));

        $this->assertFalse($result);
    }
} 