// evita repetiçãode classes

class pessoa { //modelo para criar pessoa
    constructor(nome, idade) {
        if(this.constructor === pessoa) {
            throw new error("Imploro para você: não crie isso de novo pelo amor de Deus.")    }
        this.nome = nome; // significam "este objeto"
        this.idade = idade;
}
    apresentar = () => 
        console.log (`Olá, me chamo ${this.nome} e tenho ${this.idade} anos de idade.`)
}

// definir extensão
class aluno extends pessoa{
    estudar = () => 
        console.log(`Meu nome é ${this.nome} e eu sou um(a) aluno(a) do SENAI.`);
}

class professor extends pessoa{
    ensinar = () => 
        console.log(`Olá, me chamo ${this.nome}, sou professor(a) no SENAI.`);
}

// criar objeto
const Lais = new aluno("Lais" , 16)
const Alexya = new professor ("Alexya" , 34)

//chamar o objeto
Lais.apresentar();
Alexya.apresentar();
Lais.estudar();
Alexya.ensinar();