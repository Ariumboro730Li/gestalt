<?php 

echo "____Task 4____\n".PHP_EOL;

$datadiri = array(
    "Bimo Nasuti" => array(
        "mob" => "654544455",
        "email" => "bimonasuti@gmail.com",
        "hp" => "08123456787",
    ),
    "Bom Bomi" => array(
        "mob" => "1231354897",
        "email" => "bombomi@gmail.com",
    ),
    "Yuni Salam" => array(
        "mob" => "512512662",
        "email" => "yunisalam@gmail.com",
        "hp" => "08123456787",
    )
);

foreach ($datadiri as $nama => $data) {
    echo "Nama: $nama\n";
    echo "Email: " . $data["email"] . "\n";
    
    if (isset($data["hp"])) {
        echo "Nomor Handphone: " . $data["hp"] . "\n";
    } else {
        echo "Nomor Handphone: Tidak Memiliki No Handphone\n";
    }

    echo "--------------------------\n";
}

echo "\n___End Task 4__\n".PHP_EOL;