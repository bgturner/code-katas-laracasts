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

	function it_returns_4_for_the_number_4()
	{
		$this->execute(4)->shouldReturn(4);
	}

	function it_returns_Buzz_for_the_number_5()
	{
		$this->execute(5)->shouldReturn('Buzz');
	}

	function it_returns_Fizz_for_the_number_6()
	{
		$this->execute(6)->shouldReturn("Fizz");
	}

	function it_returns_7_for_the_number_7()
	{
		$this->execute(7)->shouldReturn(7);
	}

	function it_returns_8_for_the_number_8()
	{
		$this->execute(8)->shouldReturn(8);
	}

	function it_returns_Fizz_for_the_number_9()
	{
		$this->execute(9)->shouldReturn("Fizz");
	}

	function it_returns_Buzz_for_the_number_10()
	{
		$this->execute(10)->shouldReturn("Buzz");
	}

	function it_returns_FizzBuzz_for_the_number_15()
	{
		$this->execute(15)->shouldReturn("FizzBuzz");
	}

	function it_generates_a_FizzBuzz_array_when_given_a_number_greater_than_zero()
	{
		$this->executeRange(10)->shouldReturn([1,2,'Fizz',4,'Buzz','Fizz',7,8,'Fizz','Buzz']);
	}

}

