<?php
use App\Core\App;

// Esto es ahora usando la clase app para guardar todo 

App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

function view($name, $data = []){
  extract($data);
  return require "views/{$name}.view.php";
}

function redirect($path)
{
  header("Location: /{$path}");
}