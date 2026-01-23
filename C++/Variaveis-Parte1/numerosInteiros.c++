/*Variáveis são contêineres que armazenam valores de dados. Elas são usadas para armazenar, manipular e exibir informações dentro de um programa.

Em resumo, uma variável é como uma unidade de memória que podemos acessar digitando o nome da variável. 

Cada variável tem um nome único e um valor que pode ser de diferentes tipos. C++ possui vários tipos de dados incorporados que definem o tipo de valor que uma variável pode conter.

Para inicializar uma variável, usamos o seguinte formato:
variable_type variable_name = value;


Em C++, números inteiros são tipicamente representados usando o tipo de dados int.

O int é usado para armazenar números inteiros sem qualquer ponto decimal. Por exemplo:*/
int age = 30;
int temperature = -5;
int count = 100;

// Ao declarar variáveis em C++, você precisa especificar o tipo da variável antes do nome da variável. Isso é conhecido como declaração de tipo. Uma vez que uma variável é declarada com um certo tipo, ela só pode conter valores desse tipo.

/*
Desafio
Iniciante
Declare uma variável int chamada quantity e inicialize-a com o valor 5.
*/
#include <iostream>

int main() {
    // Declare and initialize variables here
    int quantity = 5;
    
    // Output the values - Don't change below this line
    std::cout << "Quantity: " << quantity;
    
    return 0;
}