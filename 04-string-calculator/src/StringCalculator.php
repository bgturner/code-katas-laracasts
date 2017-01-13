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
			$total += $number;
		}

		return $total;
	}
}
