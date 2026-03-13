/*
As instruções if nos permitem executar código com condições.

Por exemplo, vamos analisar o seguinte código:

int age = 20;
String status = "Child";
if (age > 18) {
    status = "Adult";
}
age += 1;
O código acima verifica se a variável age é maior que 18. Se for, ele definirá status para conter a string "Adult".

No final, o código incrementará age por 1, independentemente de a idade ser maior que 18 ou não.



Para usar uma instrução if em Java, precisamos usar chaves {} para definir o bloco de código, e tudo dentro da instrução if deve ser colocado entre essas chaves:

if (condition) {
    code;
    code;
    code;
}
Se a condição for true, entraremos no bloco de código dentro do if (O código indentado)


Desafio

Iniciante
Você recebe um código.

As variáveis a e b possuem valores ausentes, preencha-as para que o código dentro da declaração if seja executado e c seja igual a 3.

Bônus: tente encontrar mais de uma solução!
 */
public class Main {
    public static void main(String[] args) {
        int a = ?
        int b = ?

        // Don't change below this line
        int c = 0;
        if (a >= b && !(b < 10)) {
            c = 2;
        }

        c += 1;
        System.out.println("c = " + c);
    }
}