/*
O operador ternário é uma declaração if-else simples de uma linha. Ele tem a seguinte sintaxe:

variable = (condition) ? value_if_true : value_if_false;
O operador ternário avalia a condição. Se for true, ele atribui value_if_true à variável; caso contrário, atribui value_if_false.

Por exemplo:

int age = 20;
String message = (age >= 18) ? "Adult" : "Minor";
Neste exemplo, como age é maior ou igual a 18, message será atribuído o valor "Adult". Se age fosse menor que 18, message seria atribuído "Minor".

Você pode aninhar operadores ternários para lidar com múltiplas condições:

int score = 75;
String grade = (score >= 90) ? "A" : (score >= 80) ? "B" : (score >= 70) ? "C" : "F";
Isso verifica múltiplas condições em ordem. Se score >= 90, grade é "A"; senão se score >= 80, grade é "B"; senão se score >= 70, grade é "C"; caso contrário "F".

Nota: Operadores ternários aninhados podem ser difíceis de ler. Para condições complexas, use declarações if-else em vez disso.


Desafio

Iniciante
Crie um programa que verifica se um número é positivo, negativo ou zero usando o operador ternário. O programa deve:

Receber um inteiro como entrada do usuário.
Usar o operador ternário para determinar se o número é positivo, negativo ou zero.
Imprimir o resultado no formato: "The number is [positive/negative/zero]".
*/
import java.util.Scanner;

public class operadorTernario {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int number = scanner.nextInt();
        String result = "";
        
        // Write your code below
        result = (number > 0) ? "positive" : (number < 0) ? "negative" : "zero";
        
        System.out.println("The number is " + result);
        scanner.close();
    }
}