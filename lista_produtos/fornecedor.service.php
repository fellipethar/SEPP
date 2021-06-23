<?php

class FornecedorServ {

    private $conexao;
    private $fornecedor;

    public function __construct(Conexao $conexao, Fornecedor $fornecedor) {
        $this->conexao = $conexao->conectar();
        $this->fornecedor = $fornecedor;
    }

    public function inserir() {
        $query = 'insert into tb_fornecedor(nome, email, telefone)
                values(:nome, :email, :telefone)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->fornecedor->__get('nome'));
        $stmt->bindValue(':email', $this->fornecedor->__get('email'));
        $stmt->bindValue(':telefone', $this->fornecedor->__get('telefone'));
        $stmt->execute();
    }

    public function recuperar() {
        $query = 'select nome, email, telefone from tb_fornecedor';
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