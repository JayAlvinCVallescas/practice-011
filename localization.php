<?php

require ('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');

for($i=0; $i<3; $i++){
    $streetAddress = $faker->streetAddress;
    $barangay = $faker->barangay;
    $city = $faker->city;

    echo "$streetAddress, $barangay, $city \n";
}
