// criando a classe aluno
class Aluno {
    constructor(nome, idade) {
        // o construtor é um método tradicional
        this.nome = nome;
        this.idade = idade;
    }
    estudar = () => console.log (`${this.nome} está estudando`)
}

const Ray = new Aluno("Ray" , 17)

console.log(Ray.nome)
Ray.estudar();