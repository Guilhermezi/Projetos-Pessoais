/*Type casting é o processo de converter um valor de um tipo de dados para outro.

Em Java, podemos converter inteiros para doubles, doubles para inteiros e mais. Existem dois tipos de casting: implícito (automático) e explícito (manual).

Por exemplo integer to double:

Casting implícito (automático):*/
int number = 5;
double decimal = number; // automatically becomes 5.0

// with calculation
int x = 7;
double result = x / 2.0; // result is 3.5

//Casting explícito (manual) double to integer:
double decimal = 9.7;
int number = (int) decimal;  // becomes 9 (decimal part is truncated)

// with calculation
double price = 19.99;
int roundedPrice = (int) price;  // becomes 19

/*
Desafio

Iniciante
Escreva um programa Java que demonstre a conversão de tipo. Realize as seguintes operações:

Declare uma variável double nomeada price e inicialize-a com o valor 99.99.
Converta a variável price para um int e armazene o resultado em uma nova variável nomeada intPrice.
Imprima os valores de price e intPrice no console.*/

public class Main {
    public static void main(String[] args) {
        // Declare and initialize variables
        double price = 99.99;
        int intPrice = (int) price;
        
        
        // Output the values
        System.out.println("Price: " + price);
        System.out.println("Int Price: " + intPrice);
        
    }
}