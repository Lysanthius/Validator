# Validator

This library validates your data (int, bool, array, string, DateTime).
    
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Lysanthius/Validator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Lysanthius/Validator/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Lysanthius/Validator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Lysanthius/Validator/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Lysanthius/Validator/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Lysanthius/Validator/build-status/master)

## Integer

**This lib checks your integer data and parameters.**

List of the methods :

* IntegerValidator::equal    : 
    check if the two parameters are equal
* IntegerValidator::higher   : 
    check if the first parameter is higher than the second
* IntegerValidator::lower    : 
    check if the first parameter is lower than the second
* IntegerValidator::between  : 
    check if the first parameter is between the two others
* IntegerValidator::negative : 
    check if the parameter is negative
* IntegerValidator::positive : 
    check if the parameter is positive

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

**This lib checks your array data and parameters.**

List of the methods :

* ArrayValidator::isEmpty               : 
    check if the array is empty
* ArrayValidator::compare               : 
    compare the array and the length parameter with the comparator
* ArrayValidator::numberElementsBetween : 
    check if the array's length is between the two others parameters
* ArrayValidator::keyExists             : 
    check if the key parameter is in the array
* ArrayValidator::valueExists           : 
    check if the value parameter is in the array

```php
require __DIR__.'/vendor/autoload.php';
echo \AVW\Validator\ArrayValidator::isEmpty($array).'<br>';
echo \AVW\Validator\ArrayValidator::compare($array, 5, ArrayValidator::COMPARE_EQUAL).'<br>';
echo \AVW\Validator\ArrayValidator::numberElementsBetween($array, 2, 50).'<br>';
echo \AVW\Validator\ArrayValidator::keyExists($array, $key).'<br>';
echo \AVW\Validator\ArrayValidator::valueExists($array, $value).'<br>';
```

## Boolean

**This lib checks your boolean data and parameters.**

List of the methods :

* BooleanValidator::isTrue  :
    check if the boolean is true
* BooleanValidator::isFalse :
    check if the boolean is false

```php
require __DIR__.'/vendor/autoload.php';
echo \AVW\Validator\BooleanValidator::isTrue($bool).'<br>';
echo \AVW\Validator\BooleanValidator::isFalse($bool).'<br>';
```


## DateTime

**This lib checks your DateTime data and parameters.**

List of the methods :

* DateTimeValidator::isMajor    :
    check with the birthday if the person is major
* DateTimeValidator::isYear     :
    check if the year's parameter is the same than the date's parameter
* DateTimeValidator::isMonth    :
    check if the month's parameter is the same than the date's parameter
* DateTimeValidator::isDay      :
    check if the day's parameter is the same than the date's parameter

```php
require __DIR__.'/vendor/autoload.php';
echo \AVW\Validator\DateTimeValidator::isMajor($date).'<br>';
echo \AVW\Validator\DateTimeValidator::isYear($date, $year).'<br>';
echo \AVW\Validator\DateTimeValidator::isMonth($date, $month).'<br>';
echo \AVW\Validator\DateTimeValidator::isDay($date, $day).'<br>';
```


## String

**This lib checks your string data and parameters.**

List of the methods :

* StringValidator::hasLength            :
    check if the string has the length's parameter
* StringValidator::lengthHigher         :
    check if the string's length is higher than the length's parameter
* StringValidator::lengthLower          :
    check if the string's length is lower than the length's parameter
* StringValidator::lengthBetween        :
    check if the string's length is between than the two other parameters
* StringValidator::noWhiteSpace         :
    check if the string contains no white space
* StringValidator::NoWhiteSpaceStartEnd :
    check if the string has no white space at the end and beginning

```php
require __DIR__.'/vendor/autoload.php';
echo \AVW\Validator\StringValidator::hasLength($string, 10).'<br>';
echo \AVW\Validator\StringValidator::lengthHigher($string, 10).'<br>';
echo \AVW\Validator\StringValidator::lengthLower($string, 10).'<br>';
echo \AVW\Validator\StringValidator::lengthBetween($string, 10, 50).'<br>';
echo \AVW\Validator\StringValidator::noWhiteSpace($string).'<br>';
echo \AVW\Validator\StringValidator::noWhiteSpaceStartEnd($string).'<br>';
```