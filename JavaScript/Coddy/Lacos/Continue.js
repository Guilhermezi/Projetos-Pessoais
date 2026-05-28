/*
A instrução continue interrompe a iteração atual e continua para a próxima iteração. Por exemplo:

for (let i = 3; i < 9; i++) {
	if (i == 5) {
		continue;
	}
	console.log(i);
}
O loop irá iterar por todos os números. Quando ele atingir i=5 ele pulará essa iteração e continuará para a próxima. A saída é:

3
4
6
7
8
Observe que o número 5 não está na saída.

challenge icon
Desafio

Iniciante
Você recebeu um código que imprime os números de 1 a 20 (inclusive).

Sua tarefa é adicionar as instruções if e continue para que apenas os números pares sejam impressos (2, 4, 6, ...). 
*/
for (let i = 1; i <= 20; i++) {
    if (i % 2 == 1) {
        continue
    }
    console.log(i);
}