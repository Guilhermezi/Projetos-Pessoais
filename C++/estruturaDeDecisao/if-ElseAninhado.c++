/*
If - Else Aninhado



Podemos aninhar if-elif-else umas dentro das outras. Isso nos permite criar estruturas hierárquicas de tomada de decisão.

Por exemplo:

if (age > 18) {
    if (hasLicense) {
        std::cout << "You can drive";
    } else {
        std::cout << "Get a license first";
    }
} else {
    std::cout << "Too young to drive";
}
Pode ser aninhado infinitamente:

if (condition1) {
    if (condition2) {
        if (condition3) {
            // se condition1, condition2 e condition3 forem verdadeiras
        }
    }
}

Desafio

Iniciante
Crie um programa que verifica se alguém pode andar em uma montanha-russa. Os requisitos são:

Deve ter pelo menos 12 anos
Deve ser mais alto que 150cm
Se atenderem a ambos os requisitos, mas tiverem menos de 15 anos, precisam de supervisão de adulto
Imprima exatamente estas mensagens para cada caso:

Se muito jovem: Sorry, you are too young
Se não alto o suficiente: Sorry, you are not tall enough
Se menor de 15 e sem adulto: Sorry, you need an adult with you
Se menor de 15 com adulto: You can ride with adult supervision!
Se 15 ou mais velho e alto o suficiente: You can ride by yourself!
*/
#include <iostream>

int main() {
    int age, height;
    bool hasAdult;
    std::cin >> age >> height >> hasAdult; // Don't change this line

    // Write your code below
        // Write your code below
    if (age < 12) {
        std::cout << "Sorry, you are too young" << std::endl;
    } else if (height <= 150) {
        std::cout << "Sorry, you are not tall enough" << std::endl;
    } else {
        // Se chegou aqui, tem >= 12 anos e > 150cm
        if (age < 15) {
            if (hasAdult) {
                std::cout << "You can ride with adult supervision!" << std::endl;
            } else {
                std::cout << "Sorry, you need an adult with you" << std::endl;
            }
        } else {
            std::cout << "You can ride by yourself!" << std::endl;
        }
    }

    return 0;
}