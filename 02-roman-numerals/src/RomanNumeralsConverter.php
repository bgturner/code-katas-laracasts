<?php

namespace BTCodeKatas;

class RomanNumeralsConverter
{
    public function convert($number)
    {
			$roman_number = '';

			if ($number <= 3) {
				for ($i = 0; $i < $number; $i++) {
					$roman_number .= "I";
				}
			}

			if ($number == 4) {
				$roman_number = "IV";
			}

			return $roman_number;
    }
}
