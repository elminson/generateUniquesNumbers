# generateUniquesNumbers

```php

$array = [1, 2, 3, 4];

$gen = new generateUniqueNumbers();

$gen->setMax(10);

$gen->setExclude($array);

$gen->setTopRandomNumber(5);

$gen->generate();

print_r($gen->getCurrentNumbers());

//Output
Array
(
    [0] => 0
    [1] => 9
    [2] => 6
    [3] => 10
    [4] => 5
)

```
