<?php

namespace BTCodeKatas;

class BowlingGame
{

	private $rolls = [];

	public function roll($pins)
	{
		$this->rolls[] = $pins;
	}

	public function score()
	{
		return array_sum($this->rolls);
	}
}
