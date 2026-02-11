/*Em C, não há um tipo de dados booleano embutido como em outras linguagens. Em vez disso, C usa inteiros para representar valores booleanos.

Defina um inteiro para representar um valor booleano:*/
int isTrue = 1;  // Representa verdadeiro
int isFalse = 0; // Representa falso

/*Em C, qualquer valor não zero é considerado "verdadeiro" enquanto zero é considerado "falso". 

Use estes valores booleanos em condições:*/
int age = 25;
int isAdult = (age > 17);

printf("Is adult? %d\n", isAdult);

Output:
Is adult? 1

// A partir do C99, você pode incluir o cabeçalho <stdbool.h> para usar o tipo booleano:
#include <stdbool.h>

bool isTrue = true;   // Agora usando o tipo booleano real
bool isFalse = false; // Usando constantes predefinidas

// Mas você aprenderá mais sobre o uso de booleanos mais tarde ao longo da sua jornada

/*Desafio

Fácil
Defina a variável age para 16. Em seguida, crie um programa que verifica se a pessoa tem idade suficiente para dirigir (idade 18 ou mais).
Armazene o resultado (seja 0 para falso ou 1 para verdadeiro) em uma variável chamada canDrive, e imprima tanto a idade quanto o resultado.*/
#include <stdio.h>

int main() {
    // Your code here:
    int age = 16;

    // Your code here:
    int canDrive = (age >= 18);

    printf("Age: %d\n", age);
    printf("Can drive? %d\n", canDrive);

    return 0;
}
