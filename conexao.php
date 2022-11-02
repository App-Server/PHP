<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysgli = new mysqli($host, $usuario, $senha, $database);
if($mysgli->error) {
    die("Falha ao conectar ao banco de dados: ". $mysgli->error);
}