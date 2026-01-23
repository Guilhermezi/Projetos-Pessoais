/*Em C++, números reais são tipicamente representados usando dois tipos de dados principais: float e double.

float é usado para armazenar números com ponto decimal. Por exemplo:*/
float price = 99.99f;

/*
O 'f' (ou 'F') no final de um número decimal é chamado de sufixo literal, e ele informa explicitamente ao compilador que esse número deve ser tratado como um float.

double é usado para armazenar números com ponto decimal, mas com precisão dupla. float tipicamente tem 7 dígitos decimais de precisão, enquanto double tipicamente tem 15-17 dígitos decimais de precisão. Por exemplo:*/
float f = 3.14159265359;
double d = 3.14159265359;

/*cout << f << endl; // Might print: 3.14159
cout << d << endl; // Might print: 3.14159265359*/

/*
Desafio

Iniciante
Escreva um programa em C++ que declara e inicializa as seguintes variáveis:

Declare uma variável float chamada itemPrice e inicialize-a com o valor 24.99f.
Declare uma variável double chamada temperature e inicialize-a com o valor 23.5.

*/
#include <iostream>

int main() {
    // Declare and initialize variables here
    float itemPrice = 24.99f;
    double temperature = 23.5;
    
    // Output the values
    std::cout << "Price: " << itemPrice << std::endl;
    std::cout << "Temperature: " << temperature << std::endl;
    
    return 0;
}