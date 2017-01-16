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

}

