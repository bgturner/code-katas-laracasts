<?php

namespace spec\BTCodeKatas\FizzBuzz;

use BTCodeKatas\FizzBuzz\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{

	function it_returns_the_number_1()
	{
		$this->execute(1)->shouldReturn(1);
	}

	function it_returns_the_number_2()
	{
		$this->execute(2)->shouldReturn(2);
	}

	function it_returns_Fizz_for_the_number_3()
	{
		$this->execute(3)->shouldReturn('Fizz');
	}

}

