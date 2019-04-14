<?php 

// Este index sólo se encarga de bootstrapear y setear projects

require 'core/bootstrap.php';

// die(var_dump($app));

require Router::load('routes.php')->direct(Request::uri(), Request::method());