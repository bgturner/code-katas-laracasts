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

	function it_should_return_an_array_containing_5_when_passed_5()
	{
		$this->generate(5)->shouldReturn([5]);
	}

	function it_should_return_an_array_containing_2_3_when_passed_6()
	{
		$this->generate(6)->shouldReturn([2,3]);
	}

	function it_should_return_an_array_containing_7_when_passed_7()
	{
		$this->generate(7)->shouldReturn([7]);
	}

	function it_should_return_an_array_containing_2_2_2_when_passed_8()
	{
		$this->generate(8)->shouldReturn([2,2,2]);
	}

	function it_should_return_an_array_containing_3_3_when_passed_9()
	{
		$this->generate(9)->shouldReturn([3,3]);
	}

	function it_should_return_an_array_containing_2_5_when_passed_10()
	{
		$this->generate(10)->shouldReturn([2,5]);
	}

	function it_should_return_an_array_containing_2_2_5_5_when_passed_100()
	{
		$this->generate(100)->shouldReturn([2,2,5,5]);
	}

}
