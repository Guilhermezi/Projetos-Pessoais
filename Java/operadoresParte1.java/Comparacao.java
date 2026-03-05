/*
Operadores de comparação são usados para comparar entre dois operandos.

Às vezes, precisamos verificar se um operando é maior/menor/... que outro operando. A tabela a seguir mostra os operadores possíveis para comparação:

Operador	Significado	Exemplo
==	Igual	1 == 2 retorna false
!=	Diferente	1 != 2 retorna true
>	Maior Que	1 > 2 retorna false
<	Menor Que	1 < 2 retorna true
>=	Maior ou Igual	1 >= 2 retorna false
<=	Menor ou Igual	1 <= 2 retorna true

O operador de comparação retorna true se a comparação estiver correta ou false caso contrário.

Por exemplo:

int var1 = 13;
int var2 = 12;
boolean var3 = var1 != var2;
var3 conterá true porque var1 e var2 não são iguais

Lembre-se do tipo boolean,  var3 é um booleano.


Desafio

Iniciante
Escreva um script que inicializa 2 variáveis n1 e n2 com os valores 8 e 9 (respectivamente).

Depois disso, inicialize outra variável n3 que conterá se n1 é maior que n2.
*/
public class Comparacao {
    public static void main(String[] args) {
        // Type your code below
        int n1 = 8;
        int n2 = 9;
        boolean n3 = n1 > n2;
        
        // Don't change the line below
        System.out.println("n1 = " + n1 + ", n2 = " + n2 + ", n3 = " + n3);
    }
}