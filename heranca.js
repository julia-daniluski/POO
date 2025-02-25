//criar classe pessoa
//com parametros NOME e IDADE
// criando a classe aluno
class pessoa { //modelo para criar pessoa
    constructor(nome, idade) {
        // o construtor é um método tradicional para criar propriedades
        this.nome = nome; // significam "este objeto"
        this.idade = idade;
    }
    apresentar = () => 
        console.log (`Olá, sou o ${this.nome} e tenho ${this.idade} anos de idade.`)

}

class jogador extends pessoa{
    jogar = () => 
        console.log(`O ${this.nome} está treinando para o jogo.`);
}

class tecnico extends pessoa{
    treinar = () => 
        console.log(`O ${this.nome} está montando o sistema tático.`);
}


const Calleri = new jogador("Calleri" , 31)
const Ceni = new tecnico ("Rogério Ceni" , 52)

Calleri.apresentar();
Ceni.apresentar();
Calleri.jogar();
Ceni.treinar();