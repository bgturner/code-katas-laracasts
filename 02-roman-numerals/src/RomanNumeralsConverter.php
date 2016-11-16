<?php namespace BTCodeKatas;

class RomanNumeralsConverter
{

	/**
	 * The roman numeral
	 *
	 * @var mixed
	 */
	public $roman_number;

	/**
	 * Defines the numerals and the numbers associated with them.
	 *
	 * @var array
	 */
	public $dict = array(
		1000 => "M",
		900 => "CM",
		100 => "C",
		90 => "XC",
		50 => "L",
		40 => "XL",
		10 => "X",
		9  => "IX",
		5  => "V",
		4  => "IV",
		1  => "I",
	);

	/**
	 * Converts a given number to a roman numer.
	 *
	 * @param mixed $number
	 */
	public function convert($number)
	{
		$this->roman_number = '';

		foreach ($this->dict as $num => $numeral) {
			while ($number >= $num) {
				$this->roman_number .= $numeral;
				$number -= $num;
			}
		}

		return $this->roman_number;
	}
}
