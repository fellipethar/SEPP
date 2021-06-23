<?php

class Produtos {
    private $id;
    private $nome_produto;
    private $fornecedor;
    private $desc_produto;
    private $valor;
    private $data;

    public function __get($atributo) {
        return $this->$atributo;
    }
    
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}

?>