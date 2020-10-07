<?php

require "modal/modal.php";
require "pokemon.php";

$total_pokemon = 0;
$livingPokemon = [];

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

$pokemon1->attacks($pokemon2, 0);
$pokemon2->attacks($pokemon1, 1);

// Because this needs to be a method to the pokemon class you need to call it from one of the created objects.
// I would personally put this into the modal.php but that\'s probably me thinking of non oop javascript solutions.
$pokemon1->getPopulation();

?>