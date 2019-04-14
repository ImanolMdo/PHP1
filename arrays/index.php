<?php 

// Este index sólo se encarga de bootstrapear y setear projects

require 'core/bootstrap.php';

// die(var_dump($app));

// require Router::load('routes.php')->direct(Request::uri());

class Post {
  public $title;
  public $published;

  public function __construct($title, $published)
  {
    $this->title = $title;
    $this->published = $published;
  }
}

$posts = [
  new Post('My First Post', true),
  new Post('My Second Post', true),
  new Post('My Third Post', true),
  new Post('My Fourth Post', false)
];
/*

//ARRAY FILTER

$unpublishedPosts = array_filter($posts, function($post){
  return ! $post->published;
});

$publishedPosts = array_filter($posts, function($post){
  return $post->published;
});

var_dump($publishedPosts);
*/
/*

//ARRAY MAP

$modified = array_map(function ($post){
  //Te los convierte todos en un array
  return (array) $post;
}, $posts);

var_dump($modified);
*/

/*
//FOREACH

foreach($posts as $post){
  $post->published= true;
}
var_dump($posts);
*/

/*
//ARRAY COLUMN
//Le pasas el array y la key o la propiedad del objeto que quieres obtener. Sólo lo muestra si la variable es public. Le puedes pasar una tercera variable que es que quieres que aparezca como key
$titles = array_column($posts, 'title');

var_dump($titles);
*/