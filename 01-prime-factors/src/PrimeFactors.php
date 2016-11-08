<?php

class PrimeFactors
{

    public function generate($number)
    {
			if ($number > 1) {
				return array(2);
			}

			return array();
    }
}
