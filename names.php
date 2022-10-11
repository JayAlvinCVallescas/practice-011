<?php


require ('vendor/autoload.php');
$faker = Faker\Factory::create();

echo $faker->name. "\n";
echo $faker->name('male'). "\n";
echo $faker->name('female'). "\n";

echo $faker->firstname. "\n";
echo $faker->firstname($gender='male'). "\n";
echo $faker->firstname($gender='female'). "\n";
// echo $faker->address. "\n";
?>