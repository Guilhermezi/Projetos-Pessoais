/*
Crie um programa que demonstre a conversão de tipos entre diferentes tipos de dados numéricos:

Declare uma variável int chamada smallNumber com valor 42
Declare uma variável float chamada mediumNumber com valor 123.456
Declare uma variável double chamada largeNumber
Use conversão implícita para converter smallNumber para largeNumber
Imprima largeNumber com a mensagem "Small to large: " usando printf e 1 casa decimal
Use conversão implícita para converter mediumNumber para largeNumber
Imprima largeNumber com a mensagem "Medium to large: " usando printf e 1 casa decimal
*/
#include <stdio.h>

int main() {
    // Declare variables
    int smallNumber = 42;
    float mediumNumber = 123.456;
    double largeNumber;
    
    // Implicit conversion from int to double
    largeNumber = smallNumber;
    printf("Small to large: %.1f\n", largeNumber);
    
    // Implicit conversion from float to double
    largeNumber = mediumNumber;
    printf("Medium to large: %.1f\n", largeNumber);
    
    return 0;
}