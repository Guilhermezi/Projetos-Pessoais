/*
Operadores lógicos têm uma tabela especial chamada "Tabela verdade" que mostra o que a combinação de operadores lógicos retorna.

Tabela verdade para o operador and (&&):

a	b	a && b
false	false	false
false	true	false
true	false	false
true	true	true
A única maneira de obter um true para o operador and (&&) é se ambos a e b forem true.

Tabela verdade para o operador or (||):

a	b	a || b
false	false	false
false	true	true
true	false	true
true	true	true
Neste caso, para obter um resultado true, a ou b deve ser true.

Tabela verdade para o operador not (!):

a	!a
false	true
true	false
Aqui o valor de a é invertido. Se a for false, então !a é true.


Desafio

Iniciante
Você precisa atribuir valores inteiros às variáveis b1 e b2 para que b3 avalie como true na expressão: bool b3 = !((b1 + b2) > (b1 * b2)).

Reserve um momento para analisar a condição e pensar sobre quais valores a tornariam verdadeira.
*/
#include <iostream>
using namespace std;

int main() {
    // Type your code below
    int b1 = 5;
    int b2 = 3;
    bool b3 = !((b1 + b2) > (b1 * b2));
    
    // Don't change the line below
    cout << "b3 = " << b3 << endl;
    
    return 0;
}