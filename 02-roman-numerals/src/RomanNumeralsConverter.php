<?php

namespace BTCodeKatas;

class RomanNumeralsConverter
{
    public function convert($number)
    {
			$roman_number = '';

			if ($number >= 10) {
				$roman_number .= "X";
				$number -= 10;
			}

			if ($number >= 5) {
				$roman_number .= "V";
				$number -= 5;
			}

			if ($number == 4) {
				$roman_number = "IV";
			}

			if ($number >= 0 && $number <= 3) {
				for ($i = 0; $i < $number; $i++) {
					$roman_number .= "I";
				}
			}

			return $roman_number;
    }
}
