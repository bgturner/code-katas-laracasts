<?php

namespace BTCodeKatas;

class RomanNumeralsConverter
{
    public function convert($number)
    {
			$roman_number = '';

			for ($i = 0; $i < $number; $i++) {
				$roman_number .= "I";
			}

			return $roman_number;
    }
}
