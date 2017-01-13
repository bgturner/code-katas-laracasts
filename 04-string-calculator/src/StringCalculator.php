<?php

namespace BTCodeKatas;

class StringCalculator
{

	public function add($numbers)
	{
		$numbers = explode(',', $numbers);
		$total = 0;

		foreach ($numbers as $number) {

			if ($number < 0) throw new \InvalidArgumentException;

			if ($number > 1000) continue;

			$total += $number;
		}

		return $total;
	}
}
