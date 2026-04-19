/*



Até agora, armazenamos valores que pensamos em variáveis. Programas geralmente não funcionam dessa forma. Recebemos valores de uma fonte externa, um usuário por exemplo.

Em Java, obter entrada de um usuário é feito usando a classe Scanner. Esta classe fornece métodos para ler diferentes tipos de entrada, como inteiros, números de ponto flutuante e strings.

Para usar a classe Scanner, você primeiro precisa criar uma instância dela e associá-la ao fluxo de entrada padrão System.in. Veja como fazer:

Scanner scanner = new Scanner(System.in);
Uma vez que você tenha um objeto Scanner, você pode usar seus métodos para ler a entrada.

Aqui estão alguns métodos comumente usados:

nextInt(): Lê um inteiro.
nextDouble(): Lê um double.
nextLine(): Lê uma linha de texto (string).
Aqui está um exemplo de como obter entrada do usuário:

Scanner scanner = new Scanner(System.in);
System.out.print("Enter your age: ");
int age = scanner.nextInt();
System.out.println("Your age is: " + age);
Neste exemplo, o programa solicita ao usuário que insira sua idade, lê o inteiro usando nextInt() e, em seguida, o imprime de volta no console.

Depois que você terminar com o Scanner, é uma boa prática fechá-lo usando scanner.close() para liberar os recursos associados a ele.


Desafio

Iniciante
Escreva um programa que obtém entrada do usuário (o nome dele), e então exibe Hello, seguido pelo nome inserido pelo usuário.

Por exemplo, se o usuário digitar Bob, a saída esperada é Hello, Bob.

Você precisará:

Criar um objeto Scanner para ler a entrada.
Solicitar que o usuário digite o nome dele usando exatamente: Enter your name:
Ler o nome do usuário usando o método apropriado do Scanner.
Imprimir Hello, e a variável armazenada no final.


*/
import java.util.Scanner;

public class Scanner {
    public static void main(String[] args) {
        // Create a Scanner object
        Scanner scanner = new Scanner(System.in);
        
        // Prompt the user to enter their name
        System.out.print("Enter your name: ");
        
        // Read the user's name
        String name = scanner.nextLine();
        
        // Print the greeting message
        System.out.print("Hello, " + name);

    }
}