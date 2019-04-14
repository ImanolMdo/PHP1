<?php
/*
$app = [];
$app['config'] = require 'config.php';
$app['database'] = new QueryBuilder(
  Connection::make($app['config']['database'])
);
*/

// Esto es ahora usando la clase app para guardar todo 

App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));