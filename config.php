<?php
// Este es el archivo de configuración, donde definimos usuarios, contraseñas, etc.
return[
  'database' => [
    'name' => 'laracphp1',
    'username' => 'root',
    'password' => '',
    'connection' => 'mysql:host=localhost',
    'options' => [
      // Si quiere conectar con algo y da error que tire el warning
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
  ]

];