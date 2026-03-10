/*
Em C++, o objeto cout fornece vários métodos para imprimir saída no console. Aqui estão alguns dos métodos cout mais comumente usados:

<<: Imprime uma string no console. Ele não adiciona um caractere de nova linha no final, de modo que a saída subsequente continuará na mesma linha.
endl ou \n: Usado para adicionar uma quebra de linha na saída. Sem esses, toda a saída aparecerá na mesma linha.
Aqui está como você pode usar esses métodos:

std::string name = "Alice";
int age = 30;
Usando endl:

cout << "Name: ";
cout << name;
cout << " is " << age << " years old." << endl;
cout << "Hello, " << name << "!" << endl;
// Saída:
// Name: Alice is 30 years old.
// Hello, Alice!
Usando \n:

cout << "Name: " << name << "\n";
cout << "Age: " << age << "\n";
cout << "Hello, " << name << "!\n";
// Saída:
// Name: Alice
// Age: 30
// Hello, Alice!

Desafio

Iniciante
Escreva um programa em C++ que usa métodos cout para produzir a seguinte saída:

O código inicial já imprime "Hello, ". Adicione código abaixo para imprimir "Coddy!" para que ambos apareçam na mesma linha.
*/
#include <iostream>

int main() {
    std::cout << "Hello, ";
    // Write your code below
    std::cout << "Coddy!" << std::endl;
    return 0;
}