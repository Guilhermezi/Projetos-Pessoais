/*
Desafio

Iniciante
Escreva um programa que imprima os números de 1 a 20. Sua tarefa é pular a impressão de números que são múltiplos de 4 usando a instrução continue.

*/
for (let i = 1; i <= 20; i++) {
    if (i % 4 === 0) {
        continue;
    }
    console.log(i);
}