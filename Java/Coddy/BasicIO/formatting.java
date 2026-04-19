/*
Até agora, aprendemos como imprimir strings simples, mas às vezes precisamos inserir valores de variáveis na string.

Por exemplo:

int age = 10;
System.out.println("His age is: age");
Isso imprimirá "His age is: age" em vez de "His age is: 10"

Para fazer funcionar, vamos usar impressão formatada printf:

int age = 30;
String name = "Alice";
double balance = 1500.75;

System.out.printf("Name: %s, Age: %d, Balance: %.2f\n", name, age, balance);
%s é um marcador de posição para strings.
%d é um marcador de posição para inteiros.
%f é um marcador de posição para números de ponto flutuante.
%.2f formata o número de ponto flutuante com duas casas decimais.
\n é uma sequência de escape que move a saída para uma nova linha.
Outra forma de combinar strings com variáveis é com o operador +:

System.out.print("Name: " + name + " Age: " +  age + " Balance: " + balance);

Desafio

Iniciante
Você recebe um código que armazena uma string aleatória como entrada em uma variável chamada rnd.

Imprima no console "The input is: " e a string aleatória que está dentro da variável rnd.

Verifique os casos de teste para exemplos!



*/
import java.util.Scanner;

public class formatting {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String rnd = scanner.nextLine();
        
        // Write your code below
        System.out.printf("The input is: %s\n", rnd);
        scanner.close();
    }
}