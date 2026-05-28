/*
Desafio

Iniciante
Fatorial é uma operação matemática. O fatorial de n é o produto de todos os números inteiros positivos menores ou iguais a n. Por exemplo:

O fatorial de 3 é 6, que pode ser calculado como 1 * 2 * 3
O fatorial de 6 é 720, que pode ser calculado como 1 * 2 * 3 * 4 * 5 * 6
O fatorial de 2 é 2, que pode ser calculado como 1 * 2
Escreva um programa que receba uma entrada (given), um número inteiro, calcule o fatorial da entrada e o imprima.

Por exemplo, para a entrada 5, a saída deve ser 120 porque 1 * 2 * 3 * 4  * 5 = 120.



*/
let n = parseInt(inp); // Don't change this line
let j = 1
for (i = 1; i <= n; i ++) {
    j = i * j
    j++
}
console.log(j)