<?php 

// Este index sólo se encarga de bootstrapear y setear projects

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};


Router::load('routes.php')->direct(Request::uri(), Request::method());