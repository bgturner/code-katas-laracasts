<?php

namespace BTCodeKatas\Prime;

class PrimeFactors
{

    public function generate($number)
    {
			$primeNumbers = [];

			for ($divider = 2; $number > 1; $divider++) {
				for (; $number % $divider == 0; $number = $number / $divider) {
					$primeNumbers[] = $divider;
				}
			}

			return $primeNumbers;
    }
}
