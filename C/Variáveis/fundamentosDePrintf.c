/*Em C, a função printf() é usada para imprimir saída formatada no console. Ela faz parte da biblioteca padrão de entrada/saída <stdio.h>.

A sintaxe básica do printf() é:
printf("format string", argument1, argument2, ...);

A string de formato pode conter:

Texto simples, que é impresso como está
Especificadores de formato, que começam com % e são substituídos pelos valores dos argumentos
Aqui estão alguns especificadores de formato comuns:

%d para inteiros
%f para números de ponto flutuante
%c para caracteres
%s para strings
Exemplo:

int age = 25;
printf("I am %d years old.\n", age);
Isso produzirá a saída: I am 25 years old.

O \n no final da string é um caractere de nova linha, que move o cursor para a próxima linha após a impressão.

Desafio

Fácil
Escreva um programa em C que faça o seguinte:

Declare uma variável inteira year e inicialize-a com o valor 2023.
Declare uma variável float pi e inicialize-a com o valor 3.14159.
Use printf() para imprimir esses valores no seguinte formato:
The current year is 2023
The value of pi is 3.14159
Certifique-se de usar os especificadores de formato apropriados para cada tipo de variável.
*/
#include <stdio.h>

int main() {
    // Declare and initialize your variables here
    int year = 2023;
    float pi = 3.14159;
    // Your printf statements here
    printf("The current year is %d\n", year);
    printf("The value of pi is %f", pi);
    return 0;
}