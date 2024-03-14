<?php

$host ='localhost';
$db_name = 'ecommerce';
$user ='root';
$pass ='';

// Conexão Com o Banco de dados;

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db_name",$user,$pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo 'Erro de conexão' .$e->getMessage();
}



?>