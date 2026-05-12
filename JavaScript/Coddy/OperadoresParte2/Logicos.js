/*
Operadores lógicos são usados para verificar combinações de comparações que retornam true ou false.

Por exemplo, a seguinte instrução contém duas comparações: 

5 é maior que 3 e menor que 6?

Operador	Significado	Exemplo
&&	E - true se todos os operandos forem true	a && b
||	Ou - true se qualquer operando for true	a || b
!	Não - true se o operando for false	!a
 

Vejamos alguns exemplos:

5 é maior que 3, e 1 é igual a 1:

let b1 = (5 > 3) && (1 == 1); // resulta em true
Explicação: Todos os operandos são true, então b1 conterá true (a operação && é true se ambos os operandos forem true).

 

5 não é igual a 4, ou cinco é igual a 2:

let b2 = !(5 == 4) || (5 == 2); // resulta em verdadeiro
Explicação: O primeiro operando (5 != 4) é true, então b2 também é true (a operação || é true se qualquer um dos operandos for true)

 

1 não é igual a 1 ou falso:

let b3 = !(1 == 1) || false; // contém false
Explicação: Todos os operandos são false, então b3 conterá false (operação ||).

 

não (3 maior que 4):

let b4 = !(3 > 4); // resulta em true
Explicação: O operando é false, então b4 conterá true (operação !).

 

não (5 maior que 10 ou 5 maior que 1):

let b5 = !(5 > 10 || 5 > 1); // resulta em false
Explicação: 5 > 10 || 5 > 1 é true (um dos operandos é true), então no total b5 é false (operação !).

challenge icon
Desafio

Iniciante
Você recebeu um código. Substitua os pontos de interrogação das variáveis b1 e b2 para que b3 contenha true.

Existem muitas soluções corretas.

*/
// Type your code below
let b1 = 5 > 3
let b2 = 45 < 100
let b3 = b1 || b2

// Don't change the line below
console.log(`b3 = ${b3}`)