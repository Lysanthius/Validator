<?php

namespace AVW\Validator;

/**
 * Class DateTimeValidator
 * @package AVW\Validator
 */
class DateTimeValidator
{
    /**
     * @param \DateTime $dateTime
     *
     * @return bool
     */
    public static function isMajor(\DateTime $dateTime)
    {
        $now = new \DateTime();

        $interval = $dateTime->diff($now);

        return ($interval->y >= 18) ? true : false;
    }

    /**
     * @param \DateTime $dateTime
     * @param string $year
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isYear(\DateTime $dateTime, $year)
    {
        if(!is_string($year))
            throw new \Exception('The month parameter has to be a string.');

        return (date_format($dateTime, 'Y') === $year) ? true : false;
    }

    /**
     * @param \DateTime $dateTime
     * @param string $month
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isMonth(\DateTime $dateTime, $month)
    {
        if(!is_string($month))
            throw new \Exception('The month parameter has to be a string.');

        return (date_format($dateTime, 'm') === $month) ? true : false;
    }

    /**
     * @param \DateTime $dateTime
     * @param string $day
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isDay(\DateTime $dateTime, $day)
    {
        if(!is_string($day))
            throw new \Exception('The day parameter has to be a string.');

        return (date_format($dateTime, 'd') === $day) ? true : false;
    }
} 