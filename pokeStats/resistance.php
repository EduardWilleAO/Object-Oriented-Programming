<?php

class resistance
{
	var $energyType;
	var $value;

	public function __construct($energyType, $value)
	{
		$this->energyType = $energyType;
		$this->value = $value;
	}
}

?>