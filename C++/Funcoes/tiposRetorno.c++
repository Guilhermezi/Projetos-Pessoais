/*
A instrução return em uma função é usada para especificar o valor ou valores que a função deve produzir como sua saída. Por exemplo, a seguinte função produzirá 100:

int functionName() {
    return 100;
}
Para atribuir o valor a uma variável, escreva:

int number = functionName();
Agora a variável number conterá 100 porque é isso que a função retornou.

Observe que o tipo de retorno da função (int neste caso) deve corresponder ao tipo de dados da variável onde você está armazenando o valor retornado.


Desafio

Fácil
Cada caso de teste tem três entradas.

A primeira entrada indica quantas vezes realizar iterações, e as duas últimas entradas são números nos quais realizaremos operações.

Crie uma função que recebe dois argumentos e retorna o maior número dos dois. Se ambos forem iguais, retorne um deles.

Itare iterations vezes e para cada iteração faça:

Chame a função com num1, num2, e salve o resultado em uma variável.
Divida o maior número dos dois por 2, e então substitua a variável original maior pelo novo valor do resultado.
imprima o novo valor.  
Continue fazendo até que o programa tenha iterado iterations vezes ou um dos números seja menor que 2.
Lembre-se: O maior número pode mudar! Toda vez que você divide um número, ele fica menor. Na próxima iteração do loop, o número que era anteriormente menor pode agora ser o maior. Seu código deve verificar qual número é atualmente o maior no início de toda iteração.
*/
#include <iostream>

double bigger(double arg1, double arg2) {
    if (arg1 >= arg2) {
        return arg1;
    } else {
        return arg2;
    }
}

int main() {
    int iterations;
    double num1, num2;
    std::cin >> iterations >> num1 >> num2;

    for (int i = 0; i < iterations; i++) {
        // Verifica a condição de parada: um dos números ser menor que 2
        if (num1 < 2 || num2 < 2) {
            break;
        }

        // 1. Chame a função e salve o maior em uma variável
        double res = bigger(num1, num2);

        // 2. Divide o maior por 2 e substitui na variável original
        if (num1 >= num2) {
            num1 = res / 2;
            std::cout << num1 << std::endl;
        } else {
            num2 = res / 2;
            std::cout << num2 << std::endl;
        }
    }
    return 0;
}
