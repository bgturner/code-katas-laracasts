<?php

namespace spec\BTCodeKatas;

use BTCodeKatas\StringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
	function it_returns_zero_when_passed_an_empty_string()
	{
		$this->add('')->shouldEqual(0);
	}

	function it_adds_two_numbers()
	{
		$this->add('1,2')->shouldEqual(3);
	}
}
