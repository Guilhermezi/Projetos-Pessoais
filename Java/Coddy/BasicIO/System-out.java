/*
Em Java, o objeto System.out fornece vários métodos para imprimir saída no console. Aqui estão alguns dos métodos System.out mais comumente usados:

print(String s): Imprime uma string no console. Ele não adiciona um caractere de nova linha no final, portanto, a saída subsequente continuará na mesma linha.
println(String s): Imprime uma string no console seguida por um caractere de nova linha. Isso significa que a próxima saída começará em uma nova linha.
Aqui está como você pode usar esses métodos:

String name = "Alice";
int age = 30;

System.out.print("Name: ");
System.out.print(name);
System.out.println(" is " + age + " years old.");

System.out.println("Hello, " + name + "!");
Este código produzirá a seguinte saída:

Name: Alice is 30 years old.
Hello, Alice!

Desafio

Iniciante
Escreva um programa Java que usa os métodos System.out para produzir a seguinte saída:

Imprima "Hello, " e "Coddy!" na mesma linha.
Imprima "Java is fun!" em uma nova linha usando println.


*/
public class Main { 
    public static void main(String[] args) { 
        System.out.print("Hello, "); 
        // Completa a mesma linha
        System.out.print("Coddy!"); 
        // Pula para a próxima linha e imprime a frase
        System.out.println(); // Apenas para garantir a quebra, ou use o println abaixo
        System.out.println("Java is fun!"); 
    } 
}
