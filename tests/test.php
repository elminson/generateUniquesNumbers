<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Elminson\GenerateUniquesNumbers;

$array = [1, 2, 3, 4, 5];

$gen = new GenerateUniquesNumbers();

$gen->setMax(100);

$gen->setExclude($array);

$gen->setRandomNumberToReturn(5);

$gen->generate();

$numbers = $gen->getCurrentNumbers();

print_r($numbers);
