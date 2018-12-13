<?php
/**
 * 
 * 
 */
function getConnection(){
$dsn = 'mysql:host=localhost;dbname=cadastro';
$username = 'root';
$password = '';
try {
  $pdo = new PDO($dsn, $username, $password);
  return $pdo;
} catch(PDOException $ex) {
  echo 'ERRO: ' . $ex->getMessage();
} 
}

/*$servidor  = 'localhost';
$usuario = 'root';
$senha = '';
$dbname = 'cadastro';

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);*/