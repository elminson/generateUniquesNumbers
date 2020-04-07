<?php

require "generateUniquesNumbers.php";

$array = [1, 2, 3, 4, 5];

$gen = new generateUniqueNumbers();

$gen->setMax(100);

$gen->setExclude($array);

$gen->setRandomNumberToReturn(5);

$gen->generate();

$numbers = $gen->getCurrentNumbers();

print_r($numbers);
