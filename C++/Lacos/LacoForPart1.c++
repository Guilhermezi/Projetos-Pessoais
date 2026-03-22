/*
Às vezes, ao programar, é necessário realizar a mesma ou quase a mesma operação algumas vezes.

Para evitar escrever a mesma coisa repetidamente, podemos usar Laços.

O laço for tem a seguinte sintaxe:

for (initialization; condition; update) {
    code
}
A initialization, condition e update determinam qual é o valor de start e qual é o valor de end.

Por exemplo, laço de 0 a 5 (não incluindo):

for (int i = 0; i < 5; i++) {
    std::cout << i << std::endl;
}
Ele executará a instrução de impressão 5 vezes:

0
1
2
3
4
Neste laço, o valor inicial é 0 (como int i = 0), a condição verifica se o laço deve continuar (como i < 5), e a atualização altera o valor após cada iteração (como i++).

Os laços têm muitos casos de uso. Por exemplo, vamos somar todos os números de 1 a 100:

int sum_numbers = 0;
for (int i = 1; i <= 100; i++) {
    sum_numbers += i;
}
std::cout << sum_numbers;
Isso fará primeiro um laço por todos os números entre 1 e 100 (incluindo 100 por causa do sinal <=) e somará todos eles, depois imprimirá a variável sum_numbers


Desafio

Iniciante
Escreva um programa que imprima "Hello Coddy: " e o valor de i de 3 a 27 (incluindo, o que significa imprimir os números 3, 4, 5, ..., 26, 27, totalizando 27 - 3 + 1 = 25 vezes no total), faça isso usando um laço for.

Ficará assim:

Hello Coddy: 3
Hello Coddy: 4
...
Hello Coddy: 27
*/
#include <iostream>

int main() {
    // Laço de 3 a 27 (inclusive)
    for (int i = 3; i <= 27; i++) {
        // Usamos << para encadear a string, o valor de i e a quebra de linha
        std::cout << "Hello Coddy: " << i << std::endl;
    }
    return 0;
}
