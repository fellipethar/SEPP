<?php

    require "../../lista_produtos/fornecedor.model.php";
    require "../../lista_produtos/fornecedor.service.php";
    require "../../lista_produtos/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if( isset($_GET['acao'] ) && $_GET['acao'] == 'inserir' ) {

        $fornecedor = new Fornecedor();
        $fornecedor->__set('nome', $_POST['nome']);
        $fornecedor->__set('email', $_POST['email']);
        $fornecedor->__set('telefone', $_POST['telefone']);

        $conexao = new Conexao();

        $fornecedorService = new FornecedorServ($conexao, $fornecedor);
        $fornecedorService->inserir();

        header('Location: fornecedor.php?inclusao=1');

    }else if($acao == 'recuperar') {

        $fornecedor = new Fornecedor();
        $conexao = new Conexao();

        $fornecedorService = new FornecedorServ($conexao, $fornecedor);
        $fornecedor = $fornecedorService->recuperar();
    }
    

?>