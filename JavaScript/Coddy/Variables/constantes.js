/*
Em JavaScript, às vezes você precisa de variáveis que nunca mudam. É aí que entra o const! Ele é usado para criar constantes — valores que permanecem os mesmos após serem definidos.

Use a palavra-chave const, assim como let, mas uma vez que você define seu valor, você não pode alterá-lo depois.

const pi = 3.14;
console.log(pi); // Output: 3.14

// Trying to change pi will cause an error:
pi = 3.14159; // Error: Assignment to constant variable.
Use const para valores que nunca devem mudar, como:

Constantes matemáticas (pi = 3.14)
Configurações fixas (maxUsers = 100)
Ao usar const, seu código fica mais seguro e fácil de entender!


Desafio

Iniciante
Inicialize uma variável constante chamada minSize com o valor de 50
*/
// Type your code below
const minSize = 50;

// Don't change the line below
console.log(`minSize = ${minSize}`)