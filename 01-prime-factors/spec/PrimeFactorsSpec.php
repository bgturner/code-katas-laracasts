<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
	function it_should_return_an_empty_array_for_1(){
		$this->generate(1)->shouldReturn([]);
	}

	function it_should_return_an_array_containing_2_when_passed_2()
	{
		$this->generate(2)->shouldReturn([2]);
	}

	function it_should_return_an_array_containing_3_when_passed_3()
	{
		$this->generate(3)->shouldReturn([3]);
	}

	function it_should_return_an_array_containing_2_2_when_passed_4()
	{
		$this->generate(4)->shouldReturn([2,2]);
	}
}
