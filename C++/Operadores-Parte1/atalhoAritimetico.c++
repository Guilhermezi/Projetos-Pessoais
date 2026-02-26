/*
O C++ criou um atalho legal para operações aritméticas de auto-atribuição.

Por exemplo, em vez de escrever:

int a = 5;
a = a + 3; // a agora contém 8
Podemos simplificá-lo escrevendo +=:

int a = 5;
a += 3; // a agora contém 8
O += está adicionando ao a ele mesmo o valor 3

Essa operação é válida para todas as operações aritméticas:

Operador	Atalho
    +	      +=
    -	      -=
    *	      *=
    /	      /=
    %	      %=

Desafio

Iniciante
Você recebe um código com a inicialização de count. (Não apague esta linha!)

Sua tarefa é adicionar as seguintes operações, nesta ordem:

Adicione 4 a count
Multiplique count por 2
Subtraia 1 de count
Use os atalhos aritméticos para fazer isso!
*/
#include <iostream>

int main() {
    int count = 0;
    
    // Type your code below
    count += 4;
    count *= 2;
    count -= 1;
    
    // Don\'t change the line below
    std::cout << "count = " << count;
    return 0;
}