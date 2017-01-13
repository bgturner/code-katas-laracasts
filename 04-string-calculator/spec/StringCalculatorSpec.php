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

	function it_finds_the_sum_of_any_amount_of_numbers()
	{
		$this->add('1,2,3,4,5')->shouldEqual(15);
	}

	function it_disallows_negative_numbers()
	{
		$this->shouldThrow('InvalidArgumentException')->duringAdd('3,-2');
	}

	function it_ignores_numbers_greater_than_1000()
	{
		$this->add('1,2,3,1001')->shouldEqual(6);
	}

	function it_allows_for_newline_delimiters()
	{
		$this->add('1,2,3\n4')->shouldEqual(10);
	}

}
