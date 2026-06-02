/*
Em JavaScript, uma expressão de função (function expression) é uma forma de definir uma função como parte de uma expressão. Ao contrário das declarações de função (function declarations), as expressões de função não sofrem hoisting, o que significa que elas não podem ser chamadas antes de serem definidas no código.

Aqui está a sintaxe básica de uma expressão de função:

let functionName = function(parameters) {
	// Código a ser executado
	// ...
	return value; // Instrução de retorno opcional
};
A palavra-chave function é seguida por um nome opcional para a função. Se um nome for fornecido, ela se torna uma expressão de função nomeada; caso contrário, é uma expressão de função anônima. Os parâmetros são especificados entre parênteses, e o corpo da função é delimitado por chaves.

Aqui está um exemplo de uma expressão de função nomeada:

let add = function sum(a, b) {
	return a + b;
};

console.log(add(3, 5)); // Saída: 8
Neste exemplo, add é a variável que contém a função, e sum é o nome opcional da função. Embora a função tenha um nome, você não pode chamar sum diretamente; você deve usar a variável add.

Aqui está um exemplo de uma expressão de função anônima:

let multiply = function(a, b) {
	return a * b;
};

console.log(multiply(4, 2)); // Saída: 8
Neste caso, a função não tem um nome e ela é atribuída diretamente à variável multiply.

Expressões de função são frequentemente usadas quando você deseja passar uma função como argumento para outra função, ou quando você deseja criar uma função dinamicamente.

challenge icon
Desafio

Fácil
Crie uma expressão de função chamada calculateArea que recebe dois argumentos, width e height, e retorna a área de um retângulo. A função deve ser atribuída a uma variável chamada calculateArea.

Por exemplo:

console.log(calculateArea(5, 10)); // Saída: 50
console.log(calculateArea(3, 7));  // Saída: 21

*/
let calculateArea = function(width, height) {
    return width * height;
}

console.log(calculateArea(5, 10));
console.log(calculateArea(3, 7));