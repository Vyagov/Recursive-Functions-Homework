<?php
/* Да се състави програма, чрез която по въведени начална и крайна
цифра се извеждат на всеки нов ред следната последователност (триъгълник от знаци):
Пример: 1, 9
Изход:
1
1 2
1 2 3
... до
1 2 3 4 5 6 7 8 9
Използвайте рекурсия. */

require_once 'readline.php';

do {
	$firstNum = readline('Enter the first number: ');
	$secondNum = readline('Enter the second number: ');

} while (!is_numeric($firstNum) || !is_numeric($secondNum) || $firstNum < 0 || $secondNum < 0);

function triangleOfNumber($num1, $num2) {
	$result = $num1 <= $num2 ? printRow($num1, $num2) : printRow($num2, $num1);
	
	return $result;
}

function printCol($num1, &$row, $col = 0) {
	if ($col == $row + 1) {
		return;
	}
	echo $num1 + $col . ' ';
	echo printCol($num1, $row, $col + 1);
}

function printRow($num1, $num2, $row = 0) {

	printCol($num1, $row);
	
	echo PHP_EOL;

	if ($row + $num1 == $num2) {
		return;
	}

	printRow($num1, $num2, $row + 1);
}

triangleOfNumber($firstNum, $secondNum);
