<?php namespace BTCodeKatas;

class Person
{
	public $name;

	public $points;

	public function __construct($name, $points) {
		$this->name = $name;
		$this->points = $points;
	}

	public function earnPoints($points) {
		$this->points += $points;
	}
}

