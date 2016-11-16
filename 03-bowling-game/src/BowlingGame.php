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
		$score = '';
		$roll = 0;

		for ($frames = 0; $frames < 10; $frames++) {

			if ($this->rolls[$roll] + $this->rolls[$roll + 1] == 10) {
				$score += $this->rolls[$roll] + $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
			} else {
				$score += $this->rolls[$roll] + $this->rolls[$roll + 1];
			}

			$roll += 2;

		}


		return $score;
	}
}
