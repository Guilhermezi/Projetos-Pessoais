/*
Os operadores lógicos possuem uma tabela especial chamada "Tabela verdade" que mostra o que a combinação de operadores lógicos retorna.

Tabela verdade para o operador and (&&):

a	b	a && b
false	false	false
false	true	false
true	false	false
true	true	true
A única maneira de obter um true para o operador and (&&) é se ambos a e b forem true

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
Aqui o valor de a é invertido. Se a for false então !a é true


Desafio

Iniciante
Você precisa atribuir valores inteiros às variáveis b1 e b2 para que b3 resulte em true na expressão: b3 = !((b1 + b2) > (b1 * b2)).
*/
public class logicos2 {
    public static void main(String[] args) {
        // Type your code below
        int b1 = 2;
        int b2 = 2;
        boolean b3 = !((b1 + b2) > (b1 * b2));
        
        // Don't change the line below
        System.out.println("b3 = " + b3);
    }
}
