<?php 

echo "____Task 5____\n".PHP_EOL;

$nominal = 1_586_000;
$seratusRibu = floor($nominal / 100_000);
$limaPuluhRibu = floor(($nominal - ($seratusRibu * 100_000)) / 50_000);
$duaPuluhRibu = floor(($nominal - ($seratusRibu * 100_000) - ($limaPuluhRibu * 50_000)) / 20_000);
$sepuluhRibu = floor(($nominal - ($seratusRibu * 100_000) - ($limaPuluhRibu * 50_000) - ($duaPuluhRibu * 20_000)) / 10_000);
$limaRibu = floor(($nominal - ($seratusRibu * 100_000) - ($limaPuluhRibu * 50_000) - ($duaPuluhRibu * 20_000) - ($sepuluhRibu * 10_000)) / 5_000);
$seribu = floor(($nominal - ($seratusRibu * 100_000) - ($limaPuluhRibu * 50_000) - ($duaPuluhRibu * 20_000) - ($sepuluhRibu * 10_000) - ($limaRibu * 5_000)) / 1_000);

echo "Rp. 100.000 = $seratusRibu lembar\n";
echo "Rp. 50.000 = $limaPuluhRibu lembar\n";
echo "Rp. 20.000 = $duaPuluhRibu lembar\n";
echo "Rp. 10.000 = $sepuluhRibu lembar\n";
echo "Rp. 5.000 = $limaRibu lembar\n";
echo "Rp. 1.000 = $seribu lembar\n";

echo "\n___End Task 5__\n".PHP_EOL;