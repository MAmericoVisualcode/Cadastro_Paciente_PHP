<?php
class Paciente {
    // Atributos (propriedades) da classe Paciente
    private $nome;
    private $rg;
    private $cpf;
    private $endereco;
    private $profissao;

    // Método construtor: é chamado quando um novo objeto da classe é criado
    public function __construct($nome, $rg, $cpf, $endereco, $profissao) {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->profissao = $profissao;
    }

    // Métodos Getters (para acessar os valores dos atributos)
    public function getNome() {
        return $this->nome;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getProfissao() {
        return $this->profissao;
    }

    // Métodos Setters (para modificar os valores dos atributos)
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setProfissao($profissao) {
        $this->profissao = $profissao;
    }
}
