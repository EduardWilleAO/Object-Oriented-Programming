<?php
require "controller/controller.php";

// Run attacks from here.
// parameters: (Attacker, Target, Attack)
// attack($pokemon1, $pokemon2, 0)
attack($pokemon1, $pokemon2, 0);
attack($pokemon2, $pokemon1, 1);

// Returns total living pokemon
returnPopulation();

?>