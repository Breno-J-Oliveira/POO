class pessoa {
    constructor(nome) {
        this.nome = nome;
    }

    falar() {
        console.log(`Olá, meu nome é ${this.nome}.`);
    }
}

class aluno extends pessoa {
    falar() {
        console.log(`Olá, meu nome é ${this.nome} e sou um aluno.`);
    }
}

class professor extends pessoa {
    falar() {
        console.log(`Olá, meu nome é ${this.nome} e sou um professor.`);
    }
}
// Testando a herança criando vários alunos e professores
const aluno1 = new aluno('Felipe Heitor');
const aluno2 = new aluno('Maria Silva');
const professor1 = new professor('Carlos Eduardo');
const professor2 = new professor('Ana Paula');

aluno1.falar(); // Olá, meu nome é Felipe Heitor e sou um aluno.
aluno2.falar(); // Olá, meu nome é Maria Silva e sou um aluno.
professor1.falar(); // Olá, meu nome é Carlos Eduardo e sou um professor.
professor2.falar(); // Olá, meu nome é Ana Paula e sou um professor.

// Testando encapsulamento protegendo um dado privado
class pessoaEncapsulada {
    #idade; // Dado privado
    constructor(nome, idade) {
        this.nome = nome;
        this.#idade = idade;
    }
    getIdade() {
        return this.#idade;
    }
    setIdade(novaIdade) {
        if (novaIdade > 0) {
            this.#idade = novaIdade;
        } else {
            console.log('Idade deve ser um número positivo.');
        }
    }
}