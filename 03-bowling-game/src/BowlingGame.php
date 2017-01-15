<?php

namespace BTCodeKatas\Bowling;

class BowlingGame
{

	private $rolls = [];

	private $score;

	private $roll;

	public function roll($pins)
	{
		$this->rolls[] = $pins;
	}

	public function score()
	{
		$this->score = 0;
		$this->roll = 0;

		for ($frames = 0; $frames < 10; $frames++) {

			if ($this->isSpare($this->roll)) {
				$this->score += $this->scoreSpare($this->roll);
				$this->roll += 2;
			} elseif ($this->isStrike($this->roll)) {
				$this->score += $this->scoreStrike($this->roll);
				$this->roll += 1;
				continue;
			} else {
				$this->score += $this->scoreDefaultFrame();
				$this->roll += 2;
			}

		}

		return $this->score;
	}

	public function scoreDefaultFrame()
	{
		return $this->rolls[$this->roll] + $this->rolls[$this->roll + 1];
	}

	private function isSpare($roll) {
		return ($this->rolls[$roll] + $this->rolls[$roll + 1] == 10) ? true : false;
	}

	private function scoreSpare($roll)
	{
		return $this->rolls[$roll] + $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
	}

	private function isStrike($roll) {
		return ($this->rolls[$roll] == 10) ? true : false;
	}

	private function scoreStrike($roll)
	{
		return $this->rolls[$roll] + $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
	}

}
