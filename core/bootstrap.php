<?php

$app = [];


$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

//Guardando la conexión en una variable
// $pdo = Connection::make();

// Construyendo una query de la conexión
// $query = new QueryBuilder($pdo);


// Resumiendo todo el proceso anterior en una línea y devolviéndolo directamente

$app['database'] = new QueryBuilder(

  Connection::make($app['config']['database'])

);