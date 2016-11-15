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

	function it_returns_V_for_5()
	{
		$this->convert(5)->shouldReturn("V");
	}

	function it_returns_VI_for_6()
	{
		$this->convert(6)->shouldReturn("VI");
	}

	function it_returns_VII_for_7()
	{
		$this->convert(7)->shouldReturn("VII");
	}

	function it_returns_VIII_for_8()
	{
		$this->convert(8)->shouldReturn("VIII");
	}

	function it_returns_X_for_10()
	{
		$this->convert(10)->shouldReturn("X");
	}

	function it_returns_XI_for_11()
	{
		$this->convert(11)->shouldReturn("XI");
	}

	function it_returns_XII_for_12()
	{
		$this->convert(12)->shouldReturn("XII");
	}

	function it_returns_XIII_for_13()
	{
		$this->convert(13)->shouldReturn("XIII");
	}

}

