<?php

namespace spec\BTCodeKatas;

use BTCodeKatas\Tennis;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisSpec extends ObjectBehavior
{

	function it_scores_a_0_0_game()
	{
		$this->score()->shouldReturn('Love-All');
	}

}

