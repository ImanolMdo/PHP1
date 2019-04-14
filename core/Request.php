<?php
namespace App\Core;

class Request {

  public static function uri(){

    // return trim($_SERVER['REQUEST_URI'], '/');
    // Con Parse URL ignora los datos del form y va a la página del action del form
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

  }

  public function method(){
    return $_SERVER['REQUEST_METHOD'];
  }
}