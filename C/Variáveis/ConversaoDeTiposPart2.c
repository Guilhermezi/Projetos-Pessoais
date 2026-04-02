/*
Na Parte 1, examinamos o type casting implícito. Agora, vamos explorar o type casting explícito em C.

O type casting explícito (conversão manual) é quando você força a conversão de um tipo de dados para outro usando o operador de cast.

A sintaxe para casting explícito é:

(target_type) expression
Vamos converter um float para um inteiro:

float price = 45.95;
int rounded_price = (int) price;
Após executar o código acima, rounded_price será:

45

Observe que a parte decimal é truncada (não arredondada).

Também podemos fazer cast de caracteres para inteiros para obter seus valores ASCII:

char letter = 'A';
int ascii_value = (int) letter;
Após executar o código acima, ascii_value será:

65

Lembre-se, o type casting pode levar à perda de dados, especialmente ao converter de um tipo de dados maior para um menor.


Desafio

Fácil
Escreva um programa que:

Declara uma variável double chamada temperature e atribui a ela o valor 98.6.
Usa conversão de tipo explícita para converter temperature para um inteiro e armazena em uma variável chamada whole_part.
Imprime a temperatura original e a parte inteira em linhas separadas.
Saída de exemplo:

Original temperature: 98.6
Whole part: 98



*/

#include <stdio.h>

int main() {
    double temperature = 98.6;
    int whole_part = (int) temperature;
    
    printf("Original temperature: %.1f\n", temperature);
    printf("Whole part: %d\n", whole_part);
    
    return 0;
}