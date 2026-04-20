/*
Desafio

Fácil
Crie uma função chamada calculate que recebe dois inteiros e um caractere como argumentos (parâmetros).

O caractere representa uma operação aritmética: +, -, *, ou /.

Execute a operação correspondente nos dois inteiros e imprima o resultado no formato: [num1] [operation] [num2] = [result].

Para divisão (/), realize a divisão inteira (ignore os restos).
*/
#include <iostream>
using namespace std;

void calculate(int a, int b, char op) {
    int result;

    switch (op) {
        case '+':
            result = a + b;
            break;
        case '-':
            result = a - b;
            break;
        case '*':
            result = a * b;
            break;
        case '/':
            if (b != 0) {
                result = a / b; // Divisão inteira
            } else {
                cout << "Error: Division by zero is not allowed." << endl;
                return;
            }
            break;
        default:
            cout << "Error: Invalid operator." << endl;
            return;
    }

    // Imprime o resultado no formato: [num1] [operation] [num2] = [result]
    cout << a << " " << op << " " << b << " = " << result << endl;
}

int main() {
    int a, b;
    char op;
    
    // Entrada: primeiro os números, depois o operador
    if (cin >> a >> b >> op) {
        calculate(a, b, op);
    }
    
    return 0;
}
