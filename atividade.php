<?php

class Pessoa {
    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome}.<br>";
    }
}

class Aluno extends Pessoa {
    public function falar() {
        echo "Olá, meu nome é {$this->nome} e sou um aluno.<br>";
    }
}

class Professor extends Pessoa {
    public function falar() {
        echo "Olá, meu nome é {$this->nome} e sou um professor.<br>";
    }
}

// Testando a herança criando vários alunos e professores
$aluno1 = new Aluno('Felipe Heitor');
$aluno2 = new Aluno('Maria Silva');
$professor1 = new Professor('Carlos Eduardo');
$professor2 = new Professor('Ana Paula');

$aluno1->falar();      // Olá, meu nome é Felipe Heitor e sou um aluno.
$aluno2->falar();      // Olá, meu nome é Maria Silva e sou um aluno.
$professor1->falar();  // Olá, meu nome é Carlos Eduardo e sou um professor.
$professor2->falar();  // Olá, meu nome é Ana Paula e sou um professor.

// Testando encapsulamento protegendo um dado privado
class PessoaEncapsulada {
    private $idade;
    private $nome;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($novaIdade) {
        if ($novaIdade > 0) {
            $this->idade = $novaIdade;
        } else {
            echo "Idade deve ser um número positivo.<br>";
        }
    }
}

?>