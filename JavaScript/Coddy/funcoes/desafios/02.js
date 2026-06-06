/*
Desafio

Fácil
Escreva um programa que recebe dois números como entradas. Esses números são passados como argumentos para uma função.

Crie uma função chamada sumRange que:
Recebe dois argumentos, start e end.
Calcula a soma de todos os inteiros entre start e end (inclusivo).
Imprime o resultado no formato:
The sum of numbers from [start] to [end] is [sum].
Chame a função sumRange uma vez com os números de entrada.
Exemplo: Para entradas 3 e 5, a saída deve ser:
The sum of numbers from 3 to 5 is 12.

*/
let num1 = parseInt(inp[0]); // Don't change this line
let num2 = parseInt(inp[1]); // Don't change this line
// Type your code below
function sumRange(start, end) {
    let sum = 0;
    for (let i = start; i <= end; i++) {
        sum += i;
    }
    console.log(`The sum of numbers from ${start} to ${end} is ${sum}.`);
}

sumRange(num1, num2);