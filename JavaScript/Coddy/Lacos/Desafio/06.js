/*
Desafio

Iniciante
Escreva um programa que encontre todos os pares de fatores de n usando números de 1 a n.

Por exemplo, se n = 12, a saída deve ser:

1 12
2 6
3 4
4 3
6 2
12 1
Porque:

1 * 12 = 12
2 * 6 = 12
3 * 4 = 12
4 * 3 = 12
6 * 2 = 12
12 * 1 = 12

*/
let n = parseInt(inp); // Don't change this line

// Write your code below
for (let i = 1; i <= n; i++) {
    if (n % i === 0) {
        console.log(`${i} ${n / i}`);
    }
}