/*
Crie um programa em C que:

Declara e inicializa:
Uma variável inteira age com valor 25
Uma variável float price com valor 19.99
Uma variável caractere grade com valor 'A'
Uma constante MAX_SCORE com valor 100 usando #define
Calcule:
O price após um desconto de 15% e armazene em uma variável discounted_price
Converta o discounted_price para um inteiro usando casting explícito, e armazene como rounded_price
Certifique-se de formatar números de ponto flutuante para mostrar exatamente 2 casas decimais.



*/

#include <stdio.h>

#define MAX_SCORE 100

int main() {
    // Declare and initialize variables
    int age = 25;
    float price = 19.99;
    char grade = 'A';
    
    // Calculate discounted price (15% de desconto)
    float discounted_price = price * 0.85;
    
    // Convert to integer using casting explícito
    int rounded_price = (int) discounted_price;
    
    // Print all variables
    printf("Age: %d\n", age);
    printf("Price: $%.2f\n", price);
    printf("Discounted Price: $%.2f\n", discounted_price);
    printf("Rounded Price: $%d\n", rounded_price);
    printf("Grade: %c\n", grade);
    printf("Max Score: %d\n", MAX_SCORE);
    
    return 0;
}