<?php 

echo "____Task 2____\n".PHP_EOL;

$zero = "0";
for ($i=1; $i <= 10 ; $i++) {
    $zero = $zero."0";
    if ($i <= 5) {
        echo  $zero.$i.PHP_EOL;
    } else {
        echo $i.$zero.PHP_EOL;
    }
}

echo "\n___End Task 2__\n".PHP_EOL;

