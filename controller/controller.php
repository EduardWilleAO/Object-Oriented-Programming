<?php
require "modal/modal.php";

require "pokeStats/attacks.php";
require "pokeStats/energyType.php";
require "pokeStats/weakness.php";
require "pokeStats/resistance.php";

$total_pokemon = 0;
$livingPokemon = [];

$energyTypes = [
	new energyType("Lightning"),
    new energyType("Water"),
    new energyType("Fire"),
    new energyType("Fighting")
];

$pokemon1 = new pokemon(
	"Pikachu",
	$energyTypes[0],
	"60",
	[new attacks("Electric Ring", 50), new attacks("Pika Punch", 20)],
	new weakness($energyTypes[2], 1.5),
	new resistance($energyTypes[3], 2.0)
);
$pokemon2 = new pokemon(
	"Charmeleon",
	$energyTypes[2],
	"60",
	[new attacks("Head Butt", 10), new attacks("Flare", 30)],
	new weakness($energyTypes[1], 2),
	new resistance($energyTypes[0], 10)
);

function attack($attacker, $target, $attack) {
	if($attacker != NULL && $target != NULL){
		$attacker->attacks($target, $attack);
	} else {
		echo 'One of the parameters is empty!';
	}
}

function returnPopulation() {
	getPopulation();
}
?>