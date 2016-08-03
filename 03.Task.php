<?php
/* Да се състави програма, която проверява дали въведено естествено
число е просто. */

require_once 'readline.php';

do {
	$input = readline('Enter number: ');

} while (!is_numeric($input) || $input <= 1);

function isPrime($num, $div) {

	if ($div == 1) {
		return true;
	}

	if ($num % $div == 0){
		return false;
	}

	return isPrime($num, $div - 1);
}

$param = floor(sqrt($input));

echo isPrime($input, $param) ? 'Number is prime.' : 'Number is not prime.';

