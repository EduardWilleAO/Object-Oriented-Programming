<?php

class weakness
{
	var $energyType;
	var $multiplier;

	public function __construct($energyType, $multiplier)
	{
		$this->energyType = $energyType;
		$this->multiplier = $multiplier;
	}
}

?>