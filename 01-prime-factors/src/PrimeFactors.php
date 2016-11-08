<?php

class PrimeFactors
{

    public function generate($number)
    {
			$primeNumbers = [];

			while ($number % 2 == 0) {
				$primeNumbers[] = 2;
				$number = $number / 2;
			}

			while ($number % 3 == 0) {
				$primeNumbers[] = 3;
				$number = $number / 3;
			}

			return $primeNumbers;
    }
}
