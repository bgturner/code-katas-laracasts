<?php

namespace BTCodeKatas;
use \InvalidArgumentException;

class StringCalculator
{

	const MAX_NUMBER_ALLOWED = 1000;

	public function add($numbers)
	{

		$numbers = $this->splitString($numbers);

		$total = 0;

		foreach ($numbers as $number) {

			$number = $this->gaurdAgainstInvalidNumber($number);

			if ($number > self::MAX_NUMBER_ALLOWED) continue;

			$total += $number;
		}

		return $total;
	}

	public function splitString($numbers)
	{
		$numbers = array_map( 'intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
		return $numbers;
	}

	public function gaurdAgainstInvalidNumber($number)
	{
		if ($number < 0) throw new InvalidArgumentException("Invalid Number Provided: $number");
		return $number;
	}
}
