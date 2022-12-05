<?php

require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';

require 'framework/Database.php';





//$database = new Database();
//$task = $database->selectAll('tasks');
$tasks = Database :: selectAll('tasks');
//$tasks = task::selectAll('task');

$greeting = greet();
