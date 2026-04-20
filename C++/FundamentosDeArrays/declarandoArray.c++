/*
Um array é uma coleção de itens e pode conter valores do mesmo tipo, como números, strings ou até mesmo outros arrays. Arrays são criados usando colchetes [] e os itens dentro do array são separados por vírgulas.

Aqui está um exemplo de como criar um array:

int numbers[] = {1, 2, 3, 4, 5};
Para verificar o comprimento do array, podemos usar o operador std::size():

int length = std::size(numbers)
A variável length conterá 5 porque existem 5 elementos no array.

Outra forma de criar um array usando colchetes [] seguido pelo tamanho do array:

int numbers[5];
Cria um array de 5 inteiros, todos inicializados com 0


Desafio

Fácil
Crie um array chamado shoppingList que contenha os seguintes itens: bread, eggs, milk e butter.
*/
#include <iostream>
#include <string>

int main() {
    // Create the shoppingList array here
    string shoppingList["bread", "eggs", "milk", "butter"];
    
    // Don't change the code below
    std::cout << "Shopping List:" << std::endl;
    for (int i = 0; i < std::size(shoppingList); i++) {
        std::cout << shoppingList[i] << std::endl;
    }
    return 0;
}