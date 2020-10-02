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

?>