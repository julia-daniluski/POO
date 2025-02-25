class Aluno{
    #nota
    constructor(nome, idade, nota) {
        //O constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
        this.#nota = nota;
    }
    estudar = () => console.log(`${this.nome} está estudando.`);
    verNota = () => this.#nota
}
const ray = new Aluno("Rayanne" , 17 , 75)

console.log(ray.nome)
console.log(ray.verNota())