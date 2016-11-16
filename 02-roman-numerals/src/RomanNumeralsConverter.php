<?php

namespace BTCodeKatas;

class RomanNumeralsConverter
{

		public $roman_number;

    public function convert($number)
    {
			$this->roman_number = '';

			$number = $this->reduce($number, 10, 'X');
			$number = $this->reduce($number, 5, 'V');

			if ($number == 4) {
				$this->roman_number = "IV";
			}

			if ($number >= 0 && $number <= 3) {
				for ($i = 0; $i < $number; $i++) {
					$this->roman_number .= "I";
				}
			}

			return $this->roman_number;
    }

		private function reduce($number, $reducer, $numeral) {

			if ($number >= $reducer) {
				$this->roman_number .= $numeral;
				$number -= $reducer;
			}

			return $number;

		}
}
