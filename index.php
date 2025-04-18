<?php

// Inclui o arquivo da classe Paciente
require_once 'Paciente.php';

// Cria um novo objeto da classe Paciente
$paciente1 = new Paciente("Ana Souza", "MG-12.345.678", "987.654.321-00", "Rua das Flores, 123", "Professora");

// Acessa os atributos usando os getters e exibe
echo "Nome: " . $paciente1->getNome() . "<br>";
echo "RG: " . $paciente1->getRg() . "<br>";
echo "CPF: " . $paciente1->getCpf() . "<br>";
echo "Endereço: " . $paciente1->getEndereco() . "<br>";
echo "Profissão: " . $paciente1->getProfissao() . "<br>";

echo "<br>";

// Cria outro objeto da classe Paciente
$paciente2 = new Paciente("Carlos Pereira", "SP-98.765.432", "111.222.333-44", "Avenida Principal, 456", "Engenheiro");

// Modifica a profissão do segundo paciente usando o setter
$paciente2->setProfissao("Analista de Sistemas");

// Exibe a nova profissão
echo "Nome: " . $paciente2->getNome() . "<br>";
echo "Nova Profissão: " . $paciente2->getProfissao() . "<br>";
