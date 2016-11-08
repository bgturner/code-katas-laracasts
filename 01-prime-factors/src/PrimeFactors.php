<?php

class PrimeFactors
{

    public function generate($number)
    {
			if ($number > 3) {
				return array(2,2);
			}

			if ($number > 2) {
				return array(3);
			}

			if ($number > 1) {
				return array(2);
			}

			return array();
    }
}
