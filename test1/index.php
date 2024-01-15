<?php 

echo "____Task 1____\n".PHP_EOL;

$array = [
    "Volvo",
    "BMW",
    "Toyota",
    "Kijang"
];

echo implode(", ", $array).PHP_EOL;
echo implode(", ", [$array[1], $array[0], $array[2], $array[3]]).PHP_EOL;
echo implode(", ", [$array[2], $array[0], $array[1], $array[3]]).PHP_EOL;
echo implode(", ", [$array[3], $array[2], $array[0], $array[1]]).PHP_EOL;
echo "\n___End Task 1__\n".PHP_EOL;