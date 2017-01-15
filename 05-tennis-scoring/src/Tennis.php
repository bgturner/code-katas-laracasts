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

		$score = sprintf(
			'%s-%s',
			$this->lookup[$this->player1->points],
			($this->lookup[$this->player1->points] == $this->lookup[$this->player2->points]) ? 'All' : $this->lookup[$this->player2->points]
		);

		return $score;
	}
}

