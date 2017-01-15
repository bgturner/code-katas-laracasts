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

	function it_scores_a_3_0_game()
	{
		$this->john->earnPoints(3);
		$this->score()->shouldReturn('Fourty-Love');
	}

	function it_scores_a_4_0_game()
	{
		$this->john->earnPoints(4);
		$this->score()->shouldReturn('Win for John Doe');
	}

	function it_scores_a_0_4_game()
	{
		$this->jane->earnPoints(4);
		$this->score()->shouldReturn('Win for Jane Doe');
	}

	function it_scores_Advantage__a_4_3_game()
	{
		$this->john->earnPoints(4);
		$this->jane->earnPoints(3);
		$this->score()->shouldReturn('Advantage John Doe');
	}

	function it_scores_Advantage__a_4_5_game()
	{
		$this->john->earnPoints(4);
		$this->jane->earnPoints(5);
		$this->score()->shouldReturn('Advantage Jane Doe');
	}

	function it_scores_Deuce_for_a_3_3_game()
	{
		$this->john->earnPoints(3);
		$this->jane->earnPoints(3);
		$this->score()->shouldReturn('Deuce');
	}

}

