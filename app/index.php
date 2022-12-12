<?php

use Framework\Database\Database;

require 'app/helpers.php';

require 'app/Models/Task.php';

require 'config.php';

require 'framework/Database/Database.php';
require 'framework/Database/Connection.php';

//$database = new Database();
//$task = $database->selectAll('tasks');
$database = new Database($config);
$tasks = Database::selectAll('Task');
//$tasks = task::selectAll('task');

$greeting = greet();
