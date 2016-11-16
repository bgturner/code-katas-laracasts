<?php

namespace spec\BTCodeKatas;

use BTCodeKatas\BowlingGame;
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
		$this->roll(3);
		$this->roll(7); // rolls a spare
		$this->roll(4);
		for ($i = 0; $i < 17; $i++) {
			$this->roll(0);
		}
		$this->score()->shouldReturn(18);
	}

}

