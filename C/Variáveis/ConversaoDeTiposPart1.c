/*
Conversão de tipo em C permite que você converta um valor de um tipo de dados para outro. Isso é útil quando você precisa realizar operações entre diferentes tipos de dados.

Existem dois tipos principais de conversão de tipo:

Conversão implícita (automática)
Conversão explícita (manual)
Vamos começar com a conversão implícita:

A conversão implícita ocorre automaticamente ao converter de um tipo de dados menor para um maior:

int num = 10;
double decimal_num;

// Implicit casting from int to double
decimal_num = num;
Após executar o código acima, decimal_num terá o valor 10.0

Isso funciona porque um double pode armazenar todos os valores possíveis de um int sem perda de dados. A conversão é segura, então o C a faz automaticamente.

Caminhos comuns de conversão implícita:

char → int → long → float → double

Desafio

Fácil
Escreva um programa que:

Declara uma variável double result e define-a como 5.65
Declara uma variável int grade
Atribui o valor de result para grade usando casting explícito
Imprime o valor de grade com a mensagem "The grade is: " usando printf
*/
#include <stdio.h>

int main() {
    double result = 5.65;
    int grade;
    
    // Use explicit casting to convert result (double) to grade (int)
    grade = (int) result;
    printf("The grade is: %d\n", grade);
    
    return 0;
}