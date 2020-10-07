<?php

require "pokeStats/attacks.php";
require "pokeStats/energyType.php";
require "pokeStats/weakness.php";
require "pokeStats/resistance.php";

$energyTypes = [
	new energyType("Lightning"),
    new energyType("Water"),
    new energyType("Fire"),
    new energyType("Fighting")
];

function increasePopulation()
{
	global $total_pokemon;

	if($total_pokemon != null){
		$total_pokemon = $total_pokemon + 1;
	} else {
		$total_pokemon = 1;
	}
}

function getPopulation()
{
	global $total_pokemon;

	print "The total pokemon created: " . $total_pokemon;
}
?>