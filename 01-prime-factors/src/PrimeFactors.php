<?php

class PrimeFactors
{

    public function generate($number)
    {
			$primeNumbers = [];
			$divider = 2;

			while ($number > 1) {
				while ($number % $divider == 0) {
					$primeNumbers[] = $divider;
					$number = $number / $divider;
				}
				$divider++;
			}

			return $primeNumbers;
    }
}
