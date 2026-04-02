/*
Crie um programa que determina se uma pessoa é elegível para um desconto.

Defina uma variável age e atribua a ela 65
Defina uma variável isMember e atribua a ela 0 (falso)
Crie uma expressão booleana chamada isEligible que avalia para verdadeiro se qualquer uma das: 
A pessoa é idosa (idade 65 ou mais), OU
A pessoa é membro
Imprima o resultado de se a pessoa é elegível para um desconto
*/
/*
Crie um programa que determina se uma pessoa é elegível para um desconto.

Defina uma variável age e atribua a ela 65
Defina uma variável isMember e atribua a ela 0 (falso)
Crie uma expressão booleana chamada isEligible que avalia para verdadeiro se qualquer uma das: 
A pessoa é idosa (idade 65 ou mais), OU
A pessoa é membro
Imprima o resultado de se a pessoa é elegível para um desconto
*/
#include <stdio.h>

int main() {
    // Define the variables here
    int age = 65;
    int isMember = 0;
    
    // Create the boolean expression here
    int isEligible = (age >= 65) || isMember;
    
    // Print the result
    printf("Eligible for discount? %d\n", isEligible);
    
    return 0;
}