<?php
require 'app/helpers.php';
require 'app/Task.php';

//$Task = new Task (1,'comprar pa','a la panaderia',1);
//var_dump($Task);

$user = 'debian-sys-maint';
$pass = '51koikcsqa3MybPo';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaravel',$user,$pass);
}catch (\Exception $e){
    echo 'Error de connexió';
}

$statment = $dbh->prepare('SELECT * FROM tasks;');

$statment->execute();

$tasks = $statment->fetchAll(PDO::FETCH_CLASS,'Task');
var_dump($tasks);

//QUERY STRING
//var_dump($_GET['name']);
//$name = 'Omar';
//API

$greeting = greet();

