<?php
/* Да се състави програма, която изчислява произведение на две
естествени числа =>2, като се използва само събиране.
Входни данни: 2 естествени числа. */

require_once 'readline.php';

echo 'Enter two natural numbers:', PHP_EOL;

do {
	$firstNum = readline('First number: ');
	$secondNum = readline('Second number: ');

} while (!is_numeric($firstNum) || !is_numeric($secondNum) || $firstNum < 2 || $secondNum < 2);

function product($num1, $num2) {
	
	if ($num2 == 1) {
		return $num1;
	}
	return $num1 + product($num1, $num2 - 1);
}

echo 'Product is: ' . product($firstNum, $secondNum);
