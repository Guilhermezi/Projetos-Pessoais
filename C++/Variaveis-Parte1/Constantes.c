/*Uma constante é um tipo especial de variável que não pode ser alterada após ser inicializada.

Para declarar uma constante, use a palavra-chave const seguida do tipo da variável:

const int maxValue = 100;
No exemplo acima, uma constante chamada maxValue é inicializada com o valor 100.

Se tentarmos alterar o valor de uma constante:

const int maxValue = 100;
maxValue = 200; // Isso causará um erro
Isso resultará em um erro porque os valores de constantes não podem ser alterados.

Desafio

Iniciante
Crie uma constante chamada PI e inicialize-a com o valor 3.14159.
*/

#include <iostream>

int main() {
    // Type your code below
    const float PI = 3.14159;

    // Don't change the line below
    std::cout << "PI = " << PI;
    return 0;
}