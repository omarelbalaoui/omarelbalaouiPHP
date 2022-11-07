<?php

require 'app/helpers.php';

require 'app/Task.php';

//$task = new Task(1 , 'comprar pa', 'a la panaderia', 0);
//var_dump ($task);

$user = 'debian-sys-maint';
$pass = 'wuJIaatbRv5k4t4T';

$dbh = new PDO('mysql:localhost;dbname=phplaravelomar', $user, $pass);

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($tasks);


$greeting = greet();

//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['surname'] . '!';
