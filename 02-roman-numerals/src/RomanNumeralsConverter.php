<?php

namespace BTCodeKatas;

class RomanNumeralsConverter
{
    public function convert($number)
    {
			$roman_number = '';

			if ($number >= 0 && $number <= 3) {
				$roman_number .= "";
				for ($i = 0; $i < $number; $i++) {
					$roman_number .= "I";
				}
			}

			if ($number == 4) {
				$roman_number = "IV";
			}

			if ($number >= 5 && $number <= 8) {
				$roman_number .= "V";
				for ($i = 5; $i < $number; $i++) {
					$roman_number .= "I";
				}
			}

			return $roman_number;
    }
}
