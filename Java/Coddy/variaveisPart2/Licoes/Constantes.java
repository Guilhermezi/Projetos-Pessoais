/*
Uma constante é um tipo especial de variável que não pode ser alterada após ser inicializada.

Para declarar uma constante, use a palavra-chave final seguida do tipo da variável:*/
final int MAX_VALUE = 100;
/*No exemplo acima, uma constante chamada MAX_VALUE é inicializada com o valor 100.

Se tentarmos alterar o valor de uma constante:*/
final int MAX_VALUE = 100;
MAX_VALUE = 200; // Isso causará um erro
// Isso resultará em um erro porque os valores de constantes não podem ser alterados.

/*
Desafio

Iniciante
Crie uma constante chamada PI e inicialize-a com o valor 3.14159.
*/
public class Main {
    public static void main(String[] args) {
        // Type your code below
        final double PI = 3.14159;

        // Don't change the line below
        System.out.println("PI = " + PI);
    }
}