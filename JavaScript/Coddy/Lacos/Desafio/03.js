/*
Desafio

Fácil
Escreva um programa que imprime números de 1 a 20. Sua tarefa é parar o loop quando o programa encontrar o primeiro número divisível por 3 e 5. Imprima esse número antes de parar o loop.

*/
for (let i = 1; i <= 20; i++) {
    if (i % 3 === 0 && i % 5 === 0) {
        console.log(i);
        break;
    }
    console.log(i);
}