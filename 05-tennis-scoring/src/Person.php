<?php namespace BTCodeKatas;

class Person
{
	protected $name;

	protected $score;

	public function __construct($name, $score) {
		$this->name = $name;
		$this->score = $score;
	}
}

