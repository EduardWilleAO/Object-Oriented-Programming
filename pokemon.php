<?php
// class-construct
class pokemon
{
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
	{
		increasePopulation();

		$this->name = $name;
		$this->energyType = $energyType;
		$this->hitpoints = $hitpoints;
        $this->health = $this->hitpoints;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function attacks($target, $attack){
		$damage = $this->attacks[$attack]->damage;

		echo $this->name . " attacks " . $target->name . " with " . $this->attacks[$attack]->name . " ";

		// Two simple checks for weakness and resistance (It simply compares the names, if the same then add multiplier).
        if ($this->energyType->name == $target->weakness->energyType->name) {
            $damage = $damage * $target->weakness->multiplier;
        }
        if ($this->energyType->name == $target->resistance->energyType->name) {
            $damage -= $target->resistance->value;
        }
        $target->hitpoints -= $damage;

		echo "dealing a total of " . $damage . " damage.<br> " . $target->name . " is left with " . $target->hitpoints . " hitpoints <br><br>";
    }
}

?>