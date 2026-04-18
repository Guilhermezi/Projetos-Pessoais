/*
Operadores lógicos são usados para verificar combinações de comparações que retornam true ou false.

Por exemplo, a seguinte declaração contém duas comparações: 

5 é maior que 3 e menor que 6?

Operador	Significado	Exemplo
&&	E - true se todos os operandos forem true	a && b
||	Ou - true se qualquer operando for true	a || b
!	Não - true se o operando for false	!a
 

Vamos ver alguns exemplos,

5 é maior que 3 e 1 é igual a 1,

boolean b1 = (5 > 3) && (1 == 1); // holds true
Explicação: Todos os operandos são true, então b1 conterá true (operação and é true se ambos os operandos forem true) .

 

5 não é igual a 4 ou 5 é igual a 2,

boolean b2 = !(5 == 4) || (5 == 2); // holds true
Explicação: O primeiro operando (5 != 4) é true, então b2 também é true (operação or é true se qualquer um dos operandos for true)

 

1 não é igual a 1 ou false,

boolean b3 = !(1 == 1) || false; // holds false
Explicação: Todos os operandos são false, então b3 conterá false (operação or).

 

não (3 maior que 4),

boolean b4 = !(3 > 4); // holds true
Explicação: O operando é false, então b4 conterá true (operação not).

 

não (5 maior que 10 ou 5 maior que 1),

boolean b5 = !(5 > 10 || 5 > 1); // holds false
Explicação: 5 > 10 || 5 > 1 é true (um dos operandos é true), então no total b5 é false (operação not).


Desafio

Iniciante
Você é fornecido com um código. Substitua os pontos de interrogação das variáveis b1 e b2 para que b3 seja true.

Existem muitas soluções corretas!
*/
public class logicos {
    public static void main(String[] args) {
        // Substituindo os pontos de interrogação
        boolean b1 = true; 
        boolean b2 = false;
        boolean b3 = b1 || b2;
        
        // Don't change the line below
        System.out.println("b3 = " + b3);
    }
}
