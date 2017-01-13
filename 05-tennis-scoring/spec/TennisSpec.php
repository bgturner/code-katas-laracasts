<?php

namespace spec\BTCodeKatas;

use BTCodeKatas\Tennis;
use BTCodeKatas\Person;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisSpec extends ObjectBehavior
{

	public $john;

	public $jane;

	function let()
	{
		$this->john = new Person('John Doe', 0);
		$this->jane = new Person('Jane Doe', 0);
		$this->beConstructedWith($this->john, $this->jane);
	}

	function it_scores_a_0_0_game()
	{
		$this->score()->shouldReturn('Love-All');
	}

	function it_scores_a_1_0_game()
	{
		$this->john->earnPoints(1);
		$this->score()->shouldReturn('Fifteen-Love');
	}

	function it_scores_a_2_0_game()
	{
		$this->john->earnPoints(2);
		$this->score()->shouldReturn('Twenty-Love');
	}

}

