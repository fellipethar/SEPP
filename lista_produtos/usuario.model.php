<?php

class Usuario {
    private $id;
    private $email;
    private $senha;
    private $empresa;
    private $endereco;
    private $cep;
    private $estado;
    private $cidade;


    public function __get($atributo) {
        return $this->$atributo;
    }
    
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}

?>