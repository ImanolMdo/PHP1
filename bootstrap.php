<?php

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

//Guardando la conexión en una variable
// $pdo = Connection::make();

// Construyendo una query de la conexión
// $query = new QueryBuilder($pdo);


// Resumiendo todo el proceso anterior en una línea y devolviéndolo directamente

return new QueryBuilder(

  Connection::make($config['database'])

);