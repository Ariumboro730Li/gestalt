<?php 

echo "____Task 3____\n".PHP_EOL;


$first = "2008-03-24";
$second = "2010-06-26";

$first = new DateTime($first);
$second = new DateTime($second);
echo $first->diff($second)->format("%y tahun, %m bulan, %d hari").PHP_EOL;

echo "\n___End Task 3__\n".PHP_EOL;