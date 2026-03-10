/*
Até agora, armazenamos valores que pensamos em variáveis. Programas geralmente não funcionam dessa forma. Recebemos valores de uma fonte externa, um usuário por exemplo.

Em C++, obter entrada de um usuário é feito usando a declaração cin. Esta declaração fornece métodos para ler diferentes tipos de entrada, como inteiros, números de ponto flutuante e strings.

Para usar a declaração cin, você primeiro precisa declarar uma variável para armazenar o valor de entrada. Em seguida, você pode usar o operador de extração >> para ler a entrada do fluxo de entrada padrão std::cin e armazená-la na variável. Veja como fazer:

int age;
std::cout << "Enter your age: ";
std::cin >> age;
O operador de extração >> converterá automaticamente a entrada para o tipo de dados apropriado com base na variável em que você a está armazenando. Por exemplo:

// For integers:
std::cin >> intVariable;

// For doubles:
std::cin >> doubleVariable;

// For strings:
std::cin >> stringVariable;
Para valores booleanos em C++, cin pode lidar com entrada de duas maneiras:

1. Usando números (0 é convertido para false, valor não zero é convertido para true)

2. Usando strings ("true" ou "false" são convertidos para true ou false respectivamente)


Desafio

Iniciante
Escreva um programa que obtém entrada do usuário (o nome dele) e, em seguida, exibe Hello, seguido pelo nome inserido pelo usuário.

Por exemplo, se o usuário digitar Bob, a saída esperada é Hello, Bob.

Você precisará:

Criar uma variável string para armazenar o nome.
Solicitar ao usuário que digite o nome dele.
Ler o nome do usuário usando o método apropriado de cin.
Imprimir Hello, e a variável armazenada no final.
*/
#include <iostream>
#include <string>

int main() {
    
    // Prompt the user to enter their name
    std::cout << "Enter your name: ";
    std::string name;
    // Read the user's name
    std::cin >> name;
    
    // Print the greeting message
    std::cout << "Hello, " << name << "!" << std::endl;
    
    return 0;
}