<?php 

// Este index sólo se encarga de bootstrapear y setear projects

require 'vendor/autoload.php';
require 'core/bootstrap.php';

// die(var_dump($app));

Router::load('routes.php')->direct(Request::uri(), Request::method());