<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;


$factory = (new Factory)
->withServiceAccount('smart-lock-a3ce9-firebase-adminsdk-tkgmx-76f0092b63.json') //to use the generated key of this database
->withDatabaseUri('https://smart-lock-a3ce9-default-rtdb.firebaseio.com/'); // to get aware of the data url

$database = $factory->createDatabase(); //initialize realtime database
$auth = $factory->createAuth();


?>