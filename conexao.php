<?php
$host = "mysql.escala.web.com.br";
$db = "escalaweb16";
$user = "escalaweb05";
$pass = "yf8ahqe4";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo = ->setAttribute (PDO:: attr_errormode, PDO:: errormode_exception);
} catch (PDOExpection $e) {
    die("Erro na conexão com o banco de dados: " . $e ->getMessage());
}

?>
