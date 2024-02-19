<?php
    require_once 'vendor/autoload.php';

    use Faker\Factory;


    $lang = 'hu_HU';

    $faker = Factory::create($lang);

    for ($i=0; $i < 10; $i++) { 
        echo $faker->name . "\n";
    }

?>

