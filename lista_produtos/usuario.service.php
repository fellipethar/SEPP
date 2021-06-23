<?php

class UsuarioServ {

    private $conexao;
    private $usuario;

    public function __construct(Conexao $conexao, Usuario $usuario) {
        $this->conexao = $conexao->conectar();
        $this->usuario = $usuario;
    }

    public function inserir() {
        $query = 'insert into tb_usuario(email, senha, empresa, endereco, cep, estado, cidade)
                values(:email, :senha, :empresa, :endereco, :cep, :estado, :cidade)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email', $this->usuario->__get('email'));
        $stmt->bindValue(':senha', $this->usuario->__get('senha'));
        $stmt->bindValue(':empresa', $this->usuario->__get('empresa'));
        $stmt->bindValue(':endereco', $this->usuario->__get('endereco'));
        $stmt->bindValue(':cep', $this->usuario->__get('cep'));
        $stmt->bindValue(':estado', $this->usuario->__get('estado'));
        $stmt->bindValue(':cidade', $this->usuario->__get('cidade'));
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