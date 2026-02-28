/*
Em JavaScript, é possível declarar variáveis sem atribuir a elas um valor específico. Isso pode ser útil quando você sabe que usará uma variável mais tarde no seu código, mas ainda não sabe o valor inicial dela.

Para declarar uma variável vazia em JavaScript, você pode usar a palavra-chave let seguida do nome da variável, sem atribuir nenhum valor:

let myVariable;
Isso cria uma variável chamada myVariable, mas não atribui nenhum valor a ela. A variável é dita como não inicializada.

Quando você tenta acessar uma variável não inicializada, ela terá um valor especial chamado undefined:

console.log(myVariable); // Saída: undefined
Você pode atribuir um valor a uma variável não inicializada mais tarde no seu código usando o operador de atribuição =:

myVariable = 10;
console.log(myVariable); // Saída: 10

Desafio

Iniciante
Declare duas variáveis vazias chamadas a e b.*/
// Type your code below
let a;
let b;

// Don't change the line below
console.log(`a = ${a}, b = ${b}`)