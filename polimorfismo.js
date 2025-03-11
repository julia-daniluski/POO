class pessoa { //modelo para criar pessoa
    constructor(nome, idade, cidade) {
        // o construtor é um método tradicional para criar propriedades
        this.nome = nome; // significam "este objeto"
        this.idade = idade;
        this.cidade = cidade;
    }
    apresentar = () => 
        console.log (`Olá, me chamo ${this.nome}, tenho ${this.idade} anos de idade e moro na cidade de ${this.cidade}.`)
}

class aluno extends pessoa{
    estudar = () => 
        console.log(`Olá, me chamo ${this.nome}, sou um(a) aluno(a).`);
}

class professor extends pessoa{
    ensinar = () => 
        console.log(`Olá, me chamo ${this.nome}, sou um(a) professor(a).`);
}

const Rayanne = new aluno("Rayanne" , 17, "Santo André")
const Danielli = new professor ("Danielli" , 25, "São Bernardo")

Rayanne.apresentar();
Danielli.apresentar();
Rayanne.estudar();
Danielli.ensinar();