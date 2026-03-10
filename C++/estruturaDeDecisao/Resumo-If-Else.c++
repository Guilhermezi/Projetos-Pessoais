/*

Desafio

Iniciante
Você recebe um código que obtém como entrada dois números n1 e n2  do tipo double e um único caractere op.

Nota: aprenderemos nas próximas lições como obter entrada do usuário, no momento apenas não mexa nas três primeiras linhas.

 

Os valores possíveis para op são '+', '-', '/' e '*'

Sua tarefa é definir a variável result do tipo double com base nas condições:

se op for '+', defina result com n1 + n2.
se op for '-', defina result com n1 - n2.
se op for '/', defina result com n1 / n2.
se op for '*', defina result com n1 * n2.
*/
#include <iostream>

int main() {
    double n1, n2;
    char op;
    double result = 0; // Ela já foi criada aqui
    std::cin >> n1 >> n2 >> op;
    
    // Write your code below
    // Apenas atribua os valores, sem usar "double" novamente:
    if (op == '+') {
        result = n1 + n2;
    } else if (op == '-') {
        result = n1 - n2;
    } else if (op == '*') {
        result = n1 * n2;
    } else if (op == '/') {
        result = n1 / n2;
    }
    
    std::cout << result << std::endl;
    return 0;
}
