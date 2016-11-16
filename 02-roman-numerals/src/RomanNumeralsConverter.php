<?php

namespace BTCodeKatas;

class RomanNumeralsConverter
{

		public $roman_number;

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
