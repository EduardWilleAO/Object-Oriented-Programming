<?php

require "modal/modal.php";
require "pokemon.php";
require "pokeStats/attacks.php";
require "pokeStats/energyType.php";
require "pokeStats/weakness.php";
require "pokeStats/resistance.php";

$pokemon1 = new pokemon(
	"Pikachu",
	$energyTypes[0],
	"60",
	[new attacks("Electric Ring", 50),
	new attacks("Pika Punch", 20)],
	new weakness($energyTypes[2], 1.5),
	new resistance($energyTypes[3], 2.0);
);

$pokemon2 = new pokemon(
	"Charmeleon",
	$energyTypes[2],
	"60",
	[new attacks("Head Butt", 10),
	new attacks("Flare", 30)],
	new weakness($energyTypes[1], 2),
	new resistance($energyTypes[0], 10);
);

?>