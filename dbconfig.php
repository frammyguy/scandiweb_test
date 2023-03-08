<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
$factory = (new Factory)
    ->withServiceAccount('scandiweb-test-973e6-firebase-adminsdk-ugnga-efe2feecb8.json')
    ->withDatabaseUri('https://scandiweb-test-973e6-default-rtdb.europe-west1.firebasedatabase.app/');

    $database = $factory->createDatabase();





?>