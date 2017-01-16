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
}

