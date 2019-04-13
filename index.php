<?php 

$query = require 'bootstrap.php';



require 'Task.php';

$tasks = $query->selectAll('tododsdsds');

require 'index.view.php';