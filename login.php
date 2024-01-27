<?php
    // Passa o arquivo conexao.php como parâmetro
    include('conexao.php');

    // Bloco para verificar se as variáveis email e senha existem
    if(isset($_POST['email']) || isset($_POST['senha'])){

        if(strlen($_POST['email']) == 0){
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {

            // Prevenção de SQL Injection - Limpeza de string
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            // Selecionar todos os campos email e senha da tabela usuários
            $sql_code = "SELECT * FROM usuarios WHERE login = '$email' AND senha = '$senha'";

            // Caso ocorra algum erro
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            // Verificar se a quantidade de registro encontrado for 1
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){

                // Guardar os dados do usuario na variável
                $usuario = $sql_query->fetch_assoc();

                // Caso não exista sessão 
                if(!isset($_SESSION)) {
                    session_start(); // Criar nova sessão
                }

                // Armazenar o id e nome na sessão - continua válida mesmo quando a pessoa troca de página
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                // Redirecionar para a página painel.php
                header("Location: painel.php");

            } else {
                // Erro - email e senha incorretos
                echo "Falha ao logar! E-mail ou senha incorretos";
                header("Location: erro.html");
            }
        }

    }
?>