<?php
//Query String
//var_dump ($_GET['name']);

function greet() {
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];
    return  "Hola $name $surname!";
}

echo greet();

//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['surname'] . '!';
