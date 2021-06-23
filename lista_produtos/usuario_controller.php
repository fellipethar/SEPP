<?php

    require "../../lista_produtos/usuario.model.php";
    require "../../lista_produtos/usuario.service.php";
    require "../../lista_produtos/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if( isset($_GET['acao'] ) && $_GET['acao'] == 'inserir' ) {

        $usuario = new Usuario();
        $usuario->__set('email', $_POST['email']);
        $usuario->__set('senha', $_POST['senha']);
        $usuario->__set('empresa', $_POST['empresa']);
        $usuario->__set('endereco', $_POST['endereco']);
        $usuario->__set('cep', $_POST['cep']);
        $usuario->__set('estado', $_POST['estado']);
        $usuario->__set('cidade', $_POST['cidade']);

        $conexao = new Conexao();

        $usuarioService = new UsuarioServ($conexao, $usuario);
        $usuarioService->inserir();

        header('Location: login.php');

    }else if($acao == 'recuperar') {

        $usuario = new Usuario();
        $conexao = new Conexao();

        $usuarioService = new UsuarioServ($conexao, $usuario);
        $usuario = $usuarioService->recuperar();
    }
    

?>