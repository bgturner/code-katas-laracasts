<?php

namespace BTCodeKatas;

class Tennis
{

	protected $player1;

	protected $player2;

	public function __construct($player1, $player2) {
		$this->player1 = $player1;
		$this->player2 = $player2;
	}

	public function score()
	{
		return "Love-All";
	}
}

