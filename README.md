# Validator

This library validates your data (int, bool, array, string, DateTime).
    
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Lysanthius/Validator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Lysanthius/Validator/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Lysanthius/Validator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Lysanthius/Validator/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Lysanthius/Validator/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Lysanthius/Validator/build-status/master)

## Integer

This lib checks your integer data and parameters.

```php
require __DIR__.'/vendor/autoload.php';
echo \AVW\Validator\IntegerValidator::equal(9, 9).'<br>';
echo \AVW\Validator\IntegerValidator::higher(10, 9).'<br>';
echo \AVW\Validator\IntegerValidator::lower(8, 9).'<br>';
echo \AVW\Validator\IntegerValidator::between(5, 1, 9).'<br>';
echo \AVW\Validator\IntegerValidator::negative(-9).'<br>';
echo \AVW\Validator\IntegerValidator::positive(9).'<br>';
```

## Array

This lib checks your array data and parameters.

```php
require __DIR__.'/vendor/autoload.php';
echo \AVW\Validator\ArrayValidator::isEmpty($array).'<br>';
echo \AVW\Validator\ArrayValidator::compare($array, 5, ArrayValidator::COMPARE_EQUAL).'<br>';
echo \AVW\Validator\ArrayValidator::numberElementsBetween($array, 2, 50).'<br>';
echo \AVW\Validator\ArrayValidator::keyExists($array, $key).'<br>';
echo \AVW\Validator\ArrayValidator::valueExists($array, $value).'<br>';
```


## Boolean

This lib checks your boolean data and parameters.
```php
require __DIR__.'/vendor/autoload.php';
echo \AVW\Validator\BooleanValidator::isTrue($bool).'<br>';
echo \AVW\Validator\BooleanValidator::isFalse($bool).'<br>';
```


## DateTime

This lib checks your DateTime data and parameters.

```php
require __DIR__.'/vendor/autoload.php';
echo \AVW\Validator\DateTimeValidator::isMajor($date).'<br>';
echo \AVW\Validator\DateTimeValidator::isYear($date, $year).'<br>';
echo \AVW\Validator\DateTimeValidator::isMonth($date, $month).'<br>';
echo \AVW\Validator\DateTimeValidator::isDay($date, $day).'<br>';
```


## String

This lib checks your string data and parameters.

```php
require __DIR__.'/vendor/autoload.php';
echo \AVW\Validator\StringValidator::hasLength($string, 10).'<br>';
echo \AVW\Validator\StringValidator::lengthHigher($string, 10).'<br>';
echo \AVW\Validator\StringValidator::lengthLower($string, 10).'<br>';
echo \AVW\Validator\StringValidator::lengthBetween($string, 10, 50).'<br>';
echo \AVW\Validator\StringValidator::noWhiteSpace($string).'<br>';
echo \AVW\Validator\StringValidator::noWhiteSpaceStartEnd($string).'<br>';
```