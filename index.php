<?php

require __DIR__.'/vendor/autoload.php';

echo 'Int :<br>';
echo \AVW\Validator\IntegerValidator::between(5,2,10);
echo \AVW\Validator\IntegerValidator::between(1,2,10);
echo '<br>';
echo \AVW\Validator\IntegerValidator::equal(1,1);
echo \AVW\Validator\IntegerValidator::equal(1,2);
echo '<br>';
echo \AVW\Validator\IntegerValidator::higher(5,1);
echo \AVW\Validator\IntegerValidator::higher(1,2);
echo '<br>';
echo \AVW\Validator\IntegerValidator::lower(2,5);
echo \AVW\Validator\IntegerValidator::lower(6,5);
echo '<br>';
echo \AVW\Validator\IntegerValidator::negative(-6);
echo \AVW\Validator\IntegerValidator::negative(6);
echo '<br>';
echo \AVW\Validator\IntegerValidator::positive(5);
echo \AVW\Validator\IntegerValidator::positive(-5);
echo '<br>';

echo 'Bool :<br>';
echo \AVW\Validator\BooleanValidator::isFalse(false);
echo \AVW\Validator\BooleanValidator::isFalse(true);
echo '<br>';
echo \AVW\Validator\BooleanValidator::isTrue(true);
echo \AVW\Validator\BooleanValidator::isTrue(false);
echo '<br>';

echo 'String:<br>';
echo \AVW\Validator\StringValidator::hasLength("Hello you", 9);
echo \AVW\Validator\StringValidator::hasLength("Hello you", 10);
echo '<br>';
echo \AVW\Validator\StringValidator::lengthBetween("Hello you", 2, 18);
echo \AVW\Validator\StringValidator::lengthBetween("Hello you", 2, 8);
echo '<br>';
echo \AVW\Validator\StringValidator::lengthHigher("Hello you", 5);
echo \AVW\Validator\StringValidator::lengthHigher("Hello you", 15);
echo '<br>';
echo \AVW\Validator\StringValidator::lengthLower("Hello you", 15);
echo \AVW\Validator\StringValidator::lengthLower("Hello you", 2);
echo '<br>';
echo \AVW\Validator\StringValidator::noWhiteSpace("Heysldslds");
echo \AVW\Validator\StringValidator::noWhiteSpace("Heys ldd slds");
echo '<br>';
echo \AVW\Validator\StringValidator::noWhiteSpaceStartEnd("Hey lo");
echo \AVW\Validator\StringValidator::noWhiteSpaceStartEnd(" Hey lo ");
echo '<br>';

