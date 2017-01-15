<?php

namespace spec\BTCodeKatas\Bowling;

use BTCodeKatas\Bowling\BowlingGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingGameSpec extends ObjectBehavior
{

	// Scoring is determined by adding 10 frames of two rolls
	// A spare is when all pins are knocked down in a single frame
	//	The points for that frame include the next roll's knocked down pins
	// A Strike is when all pins are knocked down on the first roll of a frame
	//  The points for that frame include the knocked down pins for the next two rolls

	function it_scores_all_rolls()
	{
		for ($i = 0; $i < 20; $i++) {
			$this->roll(1);
		}
		$this->score()->shouldReturn(20);
	}

	function it_scores_a_spare()
	{
		$this->rollSpare();
		$this->roll(4);
		$this->rollTimes(0, 17);
		$this->score()->shouldReturn(18);
	}

	function it_scores_a_strike()
	{
		$this->roll(10);
		$this->roll(4);
		$this->roll(3);
		$this->rollTimes(0, 16);
		$this->score()->shouldReturn(24);
	}

	function it_scores_a_perfect_game()
	{
		$this->rollTimes(10, 12);
		$this->score()->shouldReturn(300);
	}

	public function rollSpare()
	{
		$this->roll(3);
		$this->roll(7);
	}

	public function rollTimes($pins, $times)
	{
		for ($i = 0; $i < $times; $i++) {
			$this->roll($pins);
		}
	}

}

