<?php

use Faker\Guesser\Name;

require ('vendor/autoload.php');
$faker = Faker\Factory::create();
echo $faker->name. "\n";
// echo $faker->address. "\n";

$faker = Faker\Factory::create();
for ($i = 0; $i < 6; $i++) 
{ 
echo $faker->optional($weight=.9, $default='null')->lastName . "\n";
}

?>