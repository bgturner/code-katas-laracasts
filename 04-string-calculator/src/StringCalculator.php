<?php

namespace BTCodeKatas;

class StringCalculator
{

	public function add($numbers)
	{
		$numbers = explode(',', $numbers);
		return array_sum($numbers);
	}
}
