<?php

namespace spec\BTCodeKatas;

use BTCodeKatas\RomanNumeralsConverter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsConverterSpec extends ObjectBehavior
{

	function it_returns_I_for_1()
	{
		$this->convert(1)->shouldReturn("I");
	}

	function it_returns_II_for_2()
	{
		$this->convert(2)->shouldReturn("II");
	}

	function it_returns_III_for_3()
	{
		$this->convert(3)->shouldReturn("III");
	}

	function it_returns_IV_for_4()
	{
		$this->convert(4)->shouldReturn("IV");
	}

}

