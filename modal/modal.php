<?php
// class-construct
class Pokemon
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
		$this->__set('name', $name);
		$this->__set('energyType', $energyType);
		$this->__set('hitpoints', $hitpoints);
		$this->__set('health', $this->hitpoints);
		$this->__set('attacks', $attacks);
		$this->__set('weakness', $weakness);
		$this->__set('resistance', $resistance);

		$this->increasePopulation();
	}

	public function __set($property, $value){
		$this->$property = $value;
	}

	public function __get($property){
		return $this->$property;
	}

	public function attacks($target, $attack){
		if($this->__get('health') <= 0){ 
			print $this->__get('name') . " does not have anymore health so it can no longer attack!<br><br>";
		} else {
			$damage = $this->attacks[$attack]->damage;

			echo $this->__get('name') . " attacks " . $target->name . " current health: " . $target->hitpoints . " with " . $this->attacks[$attack]->name . " ";

			// Two simple checks for weakness and resistance (It simply compares the names, if the same then add multiplier)
			if ($this->energyType->name == $target->weakness->energyType->name) {
				$damage = $damage * $target->weakness->multiplier;
			}
			if ($this->energyType->name == $target->resistance->energyType->name) {
				$damage -= $target->resistance->value;
			}
			$target->hitpoints -= $damage;

			echo "dealing a total of " . $damage . " damage.<br> " . $target->name . " is left with " . $target->hitpoints . " hitpoints <br><br>";
			$target->health = $target->hitpoints;

			// check if the pokemon is dead, then run decreasePopulation
			if($target->health == 0 || $target->health < 0){
				print $target->name . " Lost all of their health and died <br><br>";
				$target->decreasePopulation($target);
			}
		}
    }

	// Functions to increase and decrease the total population
	private function increasePopulation(){
		global $livingPokemon;

		array_push($livingPokemon, $this);
	}
	private static function decreasePopulation($target){
		global $livingPokemon;
		
		for($a=0; $a<=count($livingPokemon)-1; $a++){
			if($livingPokemon[$a]->name == $target->name){
				unset($livingPokemon[$a]);
			}
		}
	}
}

function getPopulation(){
		global $livingPokemon;

		print "The total number of living pokemon: " . count($livingPokemon) . "<br><br>";
}
?>