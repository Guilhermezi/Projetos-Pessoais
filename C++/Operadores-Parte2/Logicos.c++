/*
Operadores lógicos são usados para verificar combinações de comparações que retornam true ou false.

Por exemplo, a seguinte declaração contém duas comparações: 

5 é maior que 3 e menor que 6?

Operador	Significado	Exemplo
&&	E - true se todos os operandos forem true	a && b
||	Ou - true se qualquer operando for true	a || b
!	Não - true se o operando for false	!a
 

Vamos ver alguns exemplos:

5 é maior que 3 e 1 é igual a 1:

bool b1 = (5 > 3) && (1 == 1); // resulta em true
Explicação: Todos os operandos são true, então b1 manterá true (operação and é true se ambos os operandos forem true) .

 

5 não é igual a 4 ou 5 é igual a 2:

bool b2 = !(5 == 4) || (5 == 2); // resulta em true
Explicação: O primeiro operando (5 != 4) é true, então b2 também é true (operação or é true se qualquer um dos operandos for true)

 

1 não é igual a 1 ou false:

bool b3 = !(1 == 1) || false; // resulta em false
Explicação: Todos os operandos são false, então b3 manterá false (operação or).

 

3 não é maior que 4:

bool b4 = !(3 > 4); // resulta em true
Explicação: O operando é false, então b4 manterá true (operação not).

 

5 não é maior que 10 ou 5 não é maior que 1:

bool b5 = !(5 > 10 || 5 > 1); // resulta em false
Explicação: 5 > 10 || 5 > 1 é true (um dos operandos é true), então no total b5 é false (operação not).


Desafio

Iniciante
Você recebe um código. Substitua os pontos de interrogação das variáveis bool b1 e bool b2 para que bool b3 contenha true.

Dedique um momento para analisar a condição e pensar sobre quais valores a tornariam verdadeira.

Há muitas soluções corretas!
*/
#include <iostream>

int main() {
    // Type your code below
    bool b1 = 1 == 1;
    bool b2 = 5 < 1;
    bool b3 = b1 || b2;
    
    // Don't change the line below
    std::cout << "b3 = " << b3;
    return 0;
} 