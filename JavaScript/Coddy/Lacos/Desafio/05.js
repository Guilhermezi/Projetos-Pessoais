/*
Desafio

Iniciante
Escreva um laço do...while que comece com uma variável count igual a 10. O laço deve:

Imprimir "Counting down: [count]", onde [count] é o valor atual de count.
Diminuir count em 2 após cada iteração.
Parar quando count ficar menor que 0.

*/
let count = 10;
do {
    console.log(`Counting down: ${count}`);
    count -= 2;
} while (count >= 0);