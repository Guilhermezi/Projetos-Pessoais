/*
A instrução break interrompe o loop instantaneamente quando é encontrada.

Por exemplo,

for (let i = 0; i < 10; i++) {
    if (i == 6) {
        break;
    }
    console.log(i);
}
No exemplo a seguir, o loop itera regularmente até atingir o número 6. Então o programa entra na instrução if e executa a instrução break. Isso encerra o loop imediatamente.

A saída é:

0
1
2
3
4
5
challenge icon
Desafio

Iniciante
Você recebeu um código que imprime os números de 1 a 20 (inclusive).

Sua tarefa é adicionar as instruções if e break para que apenas os números de 1 a 8 sejam impressos, o loop sairá antes de imprimir os números de 9 a 20.
*/
for (let i = 1; i <= 20; i++) {
    if (i == 9) {
        break
    }
    console.log(i);
}