<?php

require 'app/helpers.php';

require 'app/Task.php';

require 'config.php';

//$task = new Task(1 , 'comprar pa', 'a la panaderia', 0);
//var_dump ($task);

//$user = 'debian-sys-maint';
//$pass = 'wuJIaatbRv5k4t4T';
//$dsn = 'mysql:host=localhost;dbname=phplaravelomar';

$user = $config['database']['user'];
$pass = $config['database']['password'];
$type = $config['database']['type'];
$host=  $config['database']['host'];
$name=  $config['database']['name'];
$dsn = "$type:host=$host;dbname=$name";

$dbh = new PDO($dsn, $user, $pass);

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);




$greeting = greet();

//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['surname'] . '!';
