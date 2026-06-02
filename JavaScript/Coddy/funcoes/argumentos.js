/*
Um argumento é um valor que você passa para uma função quando a chama.
Um parâmetro é a variável dentro da função que recebe esse valor.

Para definir uma função com parâmetros, nós os escrevemos dentro de parênteses:

function functionName(param1, param2) {
    code
}
Podemos nomear os parâmetros como quisermos e podemos escrever quantos argumentos precisarmos.

Para chamar uma função e passar argumentos para ela, escrevemos:

functionName(value1, value2, value3, ...)
Exemplo de uso:

function isEven(number) { // "number" é um parâmetro
    if (number % 2 === 0) {
        console.log(`${number} is even`);
    } else {
        console.log(`${number} is odd`);
    }
}

for (let i = 15; i < 34; i++) {
    isEven(i); // i é o argumento
}
for (let i = 153; i < 219; i++) {
    isEven(i); // argumento novamente
}
Aqui, number é o parâmetro (marcador de posição), e cada valor que passamos (como 15 ou 153) é um argumento.

challenge icon
Desafio

Fácil
Escreva um programa que receba duas entradas, números. Os números de entrada são os parâmetros da função abaixo. 

Crie uma função que receba dois parâmetros, multiplique-os (calcule o produto) e imprima o resultado, nomeie a função como desejar.

Chame a função com os números de entrada.

Nota! Em seu código, escreva a função antes de suas instruções de chamada/execução.
*/
let a = parseInt(inp[0]); // Don't change this line
let b = parseInt(inp[1]); // Don't change this line
// Type your code below

function multiply(num1, num2){
    let product = num1 * num2
    console.log(product)
}

multiply(a, b)