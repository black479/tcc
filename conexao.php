<?php

// usuario padrão do xampp
$usuario = 'root';
// senha padrão do xampp
$senha = '';
// nome do banco de dados
$database = 'test';
// endereço do banco de dados
$host ='localhost';

// variavel - driver de conexao
$mysqli = new mysqli($host, $usuario, $senha, $database);

// para verificar se deu erro e matar o script
if($mysqli->error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>