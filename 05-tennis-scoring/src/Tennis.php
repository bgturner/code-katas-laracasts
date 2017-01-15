<?php

namespace BTCodeKatas;

class Tennis
{

	protected $player1;

	protected $player2;

	protected $lookup = array(
		0 => 'Love',
		1 => 'Fifteen',
		2 => 'Twenty',
		3 => 'Fourty',
	);

	public function __construct($player1, $player2) {
		$this->player1 = $player1;
		$this->player2 = $player2;
	}

	public function score()
	{

		if ($this->hasWinner()) {
			$score = "Win for " . $this->winner()->name;
		} elseif ($this->hasTheAdvantage() ) {
			$score = "Advantage " . $this->winner()->name;
		} else {
			$score = sprintf(
				'%s-%s',
				$this->lookup[$this->player1->points],
				$this->tied() ? 'All' : $this->lookup[$this->player2->points]
			);
		}

		return $score;
	}

	public function winner() {
		return $this->player1->points > $this->player2->points ? $this->player1 : $this->player2;
	}

	public function hasWinner()
	{
		return $this->hasEnoughPointsToWin() && $this->isLeadingByTwo();
	}

	private function hasTheAdvantage() {
		if ($this->hasEnoughPointsToWin() && !$this->tied() && !$this->isLeadingByTwo()) {
			return true;
		}
		return false;
	}

	private function hasEnoughPointsToWin()
	{
		return max($this->player1->points, $this->player2->points) > 3;
	}

	private function isLeadingByTwo() {
		return abs($this->player1->points - $this->player2->points) > 2;
	}

	public function tied()
	{
		return $this->player1->points == $this->player2->points;
	}
}

