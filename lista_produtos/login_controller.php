<?php

    session_start();
    
    require "../../lista_produtos/conexao.php";

    $conexao = new Conexao();

    if(empty($_POST['email']) || empty($_POST['senha'])){
        header('Location: login.php');
        exit();
    }

    $query = "select email, senha from tb_usuario where email = '{$_POST['email']}' and senha = '{$_POST['senha']}'";
    $conexao = $conexao->conectar();
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetchAll();
    $total = count( $rows );

    if($total == 1) {
        $_SESSION['email'] = $email;
        header('Location: index.php');
        exit();
    }else {
        header('Location: cadastra.php');
        exit();
    }

?>