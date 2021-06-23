<?php

class ProdutosServ {

    private $conexao;
    private $produto;

    public function __construct(Conexao $conexao, Produtos $produto) {
        $this->conexao = $conexao->conectar();
        $this->produto = $produto;
    }

    public function inserir() {
        $query = 'insert into tb_produtos(nome_produto, fornecedor, desc_produto, valor, data)
                values(:nomeProduto, :fornecedor, :descProduto, :valor, :data)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nomeProduto', $this->produto->__get('nome_produto'));
        $stmt->bindValue(':fornecedor', $this->produto->__get('fornecedor'));
        $stmt->bindValue(':descProduto', $this->produto->__get('desc_produto'));
        $stmt->bindValue(':valor', $this->produto->__get('valor'));
        $stmt->bindValue(':data', $this->produto->__get('data'));
        $stmt->execute();
    }

    public function recuperar() {
        $query = 'select nome_produto, fornecedor, valor from tb_produtos';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function atualizar() {

    }

    public function deletar() {
        
    }
}

?>