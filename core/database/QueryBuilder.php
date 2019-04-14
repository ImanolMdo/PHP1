<?php

// Aquí vamos a hacer una clase que se encargue de hacer queries

class QueryBuilder{

  protected $pdo;

  public function __construct(PDO $pdo) //Poniendo PDO solo admite un pdo.
  {
    $this->pdo = $pdo;
  }


  // Una función que te trae todo lo que haya en una tabla
  public function selectAll($table){

      // Preparando una query
      $statement = $this->pdo->prepare("select * from {$table}");

      $statement->execute();

      // Dame todos los resultados de esa query, pero en forma de objeto. Sino, te lo tira como array asociativo también
      // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

      // Los vamos a fetchear en una clase
      return $statement->fetchAll(PDO::FETCH_CLASS);

  }


  public function insert($table, $parameters){


    // Te permite declarar un string al que le puedes añadir variables o valores
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($parameters)),
      ':' .implode(', :', array_keys($parameters))
    );

    try{
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    }catch (Exception $e){
      die('Whoops!');
    }


  }

}