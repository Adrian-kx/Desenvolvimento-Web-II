<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo "Nome: " . $faker->name . "\n";
echo "Endereço: " . $faker->address . "\n";
echo "Email: " . $faker->email . "\n";
?>
