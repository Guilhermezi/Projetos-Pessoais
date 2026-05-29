/*
Um loop aninhado é simplesmente um loop dentro de outro loop. O loop interno completará todas as suas iterações para cada iteração única do loop externo.

Uma boa analogia para isso é um relógio: para cada hora (loop externo), o ponteiro dos minutos (loop interno) deve completar seu ciclo completo de 60 minutos.

Exemplo de um loop aninhado:

for (let x = 0; x < 2; x++) {
	for (let y = 0; y < 2; y++) {
		console.log(x, y);
	}
}

// Isso resultará em:
// 0 0
// 0 1
// 1 0
// 1 1
O loop externo (x) executa duas vezes e, para cada uma dessas vezes, o loop interno (y) executa duas vezes.

challenge icon
Desafio

Iniciante
Escreva um programa que encontre todos os pares de números que somam n usando números de 1 a n - 1.

Por exemplo, se n = 6, a saída deve ser:

1 5
2 4
3 3
4 2
5 1
Porque:

1 + 5 = 6
2 + 4 = 6
3 + 3 = 6
4 + 2 = 6
5 + 1 = 6

*/
let n = parseInt(inp); // Don't change this line

// Write your code below
for (let i = 1; i < n; i++) {
    for (let j = 1; j < n; j++) {
        if (i + j === n) {
            console.log(i, j);
        }
    }
}