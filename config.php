<?php
// Este es el archivo de configuración, donde definimos usuarios, contraseñas, etc.
return[
  'database' => [
    'name' => 'laracphp1',
    'username' => 'root',
    'password' => '',
    'connection' => 'mysql:host=localhost',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
  ]

];