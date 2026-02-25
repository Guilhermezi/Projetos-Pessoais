/*
Type casting é o processo de converter um valor de um tipo de dados para outro.

Em C++, podemos converter inteiros para doubles, doubles para inteiros e mais. Existem dois tipos de casting: implícito (automático) e explícito (manual).

Por exemplo Integer to Double:

Casting implícito (automático):

int number = 5;
double decimal = number; // automaticamente se torna 5.0

// com cálculo
int x = 7;
double result = x / 2.0; // result é 3.5

Casting explícito (manual) Double to Integer:

double decimal = 9.7;
int number = (int) decimal;  // se torna 9 (a parte decimal é truncada)

// com cálculo
double price = 19.99;
int roundedPrice = (int) price;  // se torna 19

Desafio

Iniciante
Escreva um programa em C++ que demonstre a conversão de tipo. Realize o seguinte:

Converta a variável price para um int e armazene o resultado em uma nova variável chamada intPrice.
*/
#include <iostream>

int main() {
    // Declare and initialize variables
    double price = 99.99;
    int intPrice = (int) price; // Explicit casting from double to int
    
    
    // Output the values
    std::cout << "Price: " << price << std::endl;
    std::cout << "Int Price: " << intPrice << std::endl;
    
    return 0;
}