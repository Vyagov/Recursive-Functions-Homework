<?php
/* Да се състави програма, чрез която се въвежда естествено число N.
Програмата да извежда число, чиито цифри са написани в ред обратен
на въведеното число.
Да се извежда съобщение дали въведеното число е палиндром. */

require_once 'readline.php';

do {
	$input = readline('Enter number: ' . PHP_EOL);

} while (!is_numeric($input) || $input < 1);

function reverseNum($num, $length) {

	if ($length == 0) {
		return $num[0];
	}

	return $num[$length] . reverseNum($num, $length - 1);
}

$len = strlen($input) - 1;
$inputRev = reverseNum($input, $len);

echo $input == $inputRev ? $inputRev . ' is palindrome.' : $inputRev . ' is not palindrome.';