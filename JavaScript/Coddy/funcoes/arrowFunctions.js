/*
Arrow functions fornecem uma maneira mais curta de escrever funções em JavaScript. Elas são especialmente úteis para funções curtas e simples.

Uma expressão de arrow function possui uma sintaxe mais curta em comparação com expressões de função e não possui suas próprias vinculações aos termos this, arguments, super ou new.target. Arrow functions são sempre anônimas.

Aqui está a sintaxe básica de uma arrow function:

(param1, param2) => {
	// Corpo da função
	// ...
	return value; // Declaração de retorno opcional
}
Se a função tiver apenas um parâmetro, você pode omitir os parênteses ao redor da lista de parâmetros. Se o corpo da função tiver apenas uma expressão, você pode omitir as chaves e a palavra-chave return. O resultado da expressão será retornado implicitamente.

Aqui está um exemplo de uma expressão de função tradicional:

let add = function(a, b) {
	return a + b;
};
Aqui está a mesma função escrita como uma arrow function:

let add = (a, b) => a + b;
Neste exemplo, os parênteses em volta dos parâmetros são mantidos porque existem dois parâmetros. As chaves e a palavra-chave return são omitidas porque o corpo da função possui apenas uma expressão.

Aqui está outro exemplo sem parâmetros:

let greet = () => console.log("Hello!");
greet(); // Saída: Hello!
Neste caso, um par de parênteses vazio é usado para indicar que a função não possui parâmetros.

Arrow functions são frequentemente usadas quando você precisa passar uma função curta como argumento para outra função.

challenge icon
Desafio

Fácil
Crie uma arrow function chamada calculateBMI que receba dois parâmetros, weight (em quilogramas) e height (em metros), e retorne o Índice de Massa Corporal (IMC). A fórmula para o IMC é: weight / (height * height).

Por exemplo:

console.log(calculateBMI(70, 1.75)); // Output: 22.857142857142858
console.log(calculateBMI(80, 1.8));  // Output: 24.691358024691358

*/
let calculateBMI = (weight, height) => weight / (height * height);

console.log(calculateBMI(70, 1.75));
console.log(calculateBMI(80, 1.8));