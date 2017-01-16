<?php

namespace BTCodeKatas\FizzBuzz;

class FizzBuzz
{

	public function execute($number)
	{
		if ($number % 15 == 0) return "FizzBuzz";
		if ($number % 5 == 0) return "Buzz";
		if ($number % 3 == 0) return "Fizz";
		return $number;
	}

	public function executeRange($number)
	{
		$numbers = range(1, $number);
		$output = array();

		foreach ($numbers as $number) {
			$output[] = $this->execute($number);
		}

		return $output;
	}
}

