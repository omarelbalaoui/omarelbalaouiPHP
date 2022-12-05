<?php

require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';

//$task = new Task(1 , 'comprar pa', 'a la panaderia', 0);
//var_dump ($task);

//$user = 'debian-sys-maint';
//$pass = 'wuJIaatbRv5k4t4T';
//$dsn = 'mysql:host=localhost;dbname=phplaravelomar';
$dbh = connectDB($config);

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);




$greeting = greet();

//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['surname'] . '!';
