/* Constantes em C são variáveis cujos valores não podem ser alterados durante a execução do programa. Elas são úteis para valores que devem permanecer fixos ao longo do seu programa.

Defina uma constante usando a diretiva #define:*/
#define PI 3.14159
// A linha acima cria uma constante chamada PI com o valor 3.14159.

// Outra maneira de criar constantes é usando a palavra-chave const:
const float TAX_RATE = 0.07;
// Isso cria uma constante chamada TAX_RATE com o valor 0.07.

/* Use constantes em seu programa como variáveis regulares:
float area = PI * radius * radius;
float tax = price * TAX_RATE;
Constantes tornam seu código mais legível e fácil de manter. Se você precisar alterar um valor usado em vários lugares, basta atualizá-lo uma vez.

Desafio

Fácil
Crie um programa que calcula a área de um círculo. Seu programa deve:

Defina uma constante PI com o valor 3.14159
Calcule a área do círculo usando a fórmula: area = PI * radius * radius
Imprima a área calculada com exatamente 2 casas decimais no formato: "Area: X.XX"*/

#include <stdio.h>

int main() {
    // Define your PI constant here
    const float PI = 3.14159;
    int radius = 5;
    
    // Calculate the area here
    float area = PI * (radius * radius);
    // Print the area here
    printf("Area: %.2f", area);
    return 0;
}