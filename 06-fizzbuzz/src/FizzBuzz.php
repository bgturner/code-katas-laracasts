<?php

namespace BTCodeKatas\FizzBuzz;

class FizzBuzz
{

	public function execute($number)
	{
		if ($number == 5) return "Buzz";
		if ($number == 3) return "Fizz";
		return $number;
	}
}

