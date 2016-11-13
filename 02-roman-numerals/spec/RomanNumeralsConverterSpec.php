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
}

