/*
Desafio

Iniciante
Dado o seguinte trecho de código, sua tarefa é atribuir valores booleanos (true ou false) às variáveis b1, b2 e b3 para que b4 resulte em true.

A variável b4 é calculada usando a seguinte lógica:

Ela realiza uma operação AND (&&) entre b1, b2 e o NOT de b3
Para b4 ser true, todas as partes da operação AND devem ser true
*/

#include <iostream>

int main() {
    bool b1 = 1 == 1;
    bool b2 = 4 > 3;
    bool b3 = 5 != 5;
    
    bool b4 = b1 && b2 && (!b3);
    std::cout << "b4 = " << b4;
    return 0;
}