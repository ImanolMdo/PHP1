<?php 

class Connection{
  // Al hacerlo static, lo puedo llamar desde cualquier lado sin crear un objeto
  public static function make($config){

      // PDOs: Ofrecen una interfaz para conectar con la database. Son más seguros que mysql_connect y otros métodos porque previenen las SQL inyections
      // Si hay algún error tirará una Exception. En PHP las agarramos con try catch. Siempre se usan try catch para los PDOs.
      // Lo metemos en una función

    try{ //Intenta acceder a esta db

      return new PDO(

        $config['connection'].';dbname='.$config['name'],
        $config['username'],
        $config['password'],
        $config['options']

      );

    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }
}

// Llamando al método estático
// $pdo = Connection::make();