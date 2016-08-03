<?php
/* Да се състави програма, която изчислява N-тото число на Фибоначи.
Първото и второто число на Фибоначи са 1-ци, всяко следващо е равно
на сбора на предходните 2. */

require_once 'readline.php';

do {
	$input = readline('Enter a number >= 1: ');
} while (!is_numeric($input) || $input < 1 || $input > 68);

// Short, but slow version of the program:

/* function nthFibonacci($n) {
	if ($n <= 2) {
		return 1;
	}
	return nthFibonacci($n - 1) + nthFibonacci($n - 2);
}
echo "Number $input of the Fibonacci sequence is " . nthFibonacci($input) . '.'; */
// ___________________________________________________________________________________

// Faster version - work faster with larger values of n
$array = [1, 1];

function nthFibonacci($n, &$array) {
	
	if ($n <= 2) {
		return 1;
	}
	
	$count = count($array);
	
	if ($count < $n) {
		$array[] = nthFibonacci($n - 1, $array) + nthFibonacci($n - 2, $array);
	} 
	return $array[$n - 1];
}

echo "Number $input of the Fibonacci sequence is " . nthFibonacci($input, $array) . '.';


