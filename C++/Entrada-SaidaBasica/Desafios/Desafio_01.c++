/*

Desafio

Fácil
Escreva um programa em C++ que usa cout para imprimir a seguinte saída:

Imprima "C++ is fun!" na primeira linha.
Imprima "Let's explore its features:" na próxima linha.
Imprima "1. Variables" e "2. Loops" na mesma linha, separados por uma tabulação (\t).
Imprima "3. Functions" e "4. Classes" na próxima linha, separados por uma tabulação (\t).
Imprima "Happy coding!" em uma nova linha.
Use a sequência de escape \t dentro de um literal de string (por exemplo, "Column A\tColumn B") para inserir uma tabulação horizontal.

*/
#include <iostream>
using namespace std;

int main() {
    // Write code here
    cout << "C++ is fun!" << endl;
    cout << "Let's explore its features:" << endl;
    cout << "1. Variables\t2. Loops" << endl;
    cout << "3. Functions\t4. Classes" << endl;
    cout << "Happy coding!" << endl;
    return 0;
};