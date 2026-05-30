/*
Desafio

Iniciante
Escreva um programa que recebe uma entrada, um número float.

Use um laço while para multiplicar a entrada por 2 enquanto o número for menor ou igual a 100.

Imprima o primeiro número que for maior que 100.



*/
let number = parseFloat(inp); // Don't change this line
while (number <= 100) {
    number *= 2;
}
console.log(number);