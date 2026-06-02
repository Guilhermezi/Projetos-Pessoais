/*
A instrução return em uma função é usada para especificar o valor ou valores que a função deve produzir como sua saída.

Por exemplo, a seguinte função produzirá 100:

function functionName() {
	return 100;
}
Para passar o valor para uma variável, escreva:

let number = functionName();
Agora a variável number armazenará 100 porque isso é o que a função retornou.

challenge icon
Desafio

Fácil
Crie uma função chamada square que recebe um único parâmetro n e retorna o seu quadrado. Em seguida, chame a função com o valor de entrada (fornecido) e armazene o resultado em uma variável chamada result. Por fim, imprima o valor de result.

*/
let num = parseInt(inp); // Don't change this line
// Type your code below
function square(n){
    let pow = n * n
    return pow
}

let result = square(num)
console.log(result)