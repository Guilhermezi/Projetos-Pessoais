/*
Um while loop é diferente do for loop. Um for loop é comumente usado para iterar sobre um range específico, enquanto um while loop continua iterando enquanto uma determinada condição for atendida. Observe que um for loop também possui uma inicialização e uma etapa de atualização, e pode tecnicamente ser usado como um while loop — mas na prática, while é preferido quando a iteração é baseada em uma condição.

Para usar um while loop, escreva:

while (condition) {
    code
}
O código será executado apenas se a condição for true.

Se o corpo do loop contiver apenas uma única declaração, as chaves são opcionais:

while (condition)
    code;
Há muitos casos de uso em que um while resolveria o problema, mas o for loop não.


Desafio

Iniciante
Escreva um programa que recebe uma entrada, double number.

Utilize um laço while para dividir a entrada por 2 enquanto o number for maior ou igual a 3.5.

Imprima o primeiro número que for menor que 3.5.
*/
#include <iostream>

int main() {
    double number;
    
    // Recebe a entrada do usuário
    std::cin >> number;

    // Enquanto for maior ou igual a 3.5, divide por 2
    while (number >= 3.5) {
        number /= 2;
    }

    // Imprime o primeiro resultado menor que 3.5
    std::cout << number << std::endl;

    return 0;
}
