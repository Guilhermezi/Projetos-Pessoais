/*
O operador condicional é uma declaração if-else de uma linha simples. Ele tem a seguinte sintaxe:

variable = (condition) ? value_if_true : value_if_false;
O operador condicional avalia a condição. Se for true, ele atribui value_if_true à variável; caso contrário, atribui value_if_false.

Por exemplo:

int age = 20;
std::string message = (age >= 18) ? "Adult" : "Minor";
Neste exemplo, como age é maior ou igual a 18, message será atribuída o valor "Adult". Se age fosse menor que 18, message seria atribuída "Minor".

Você pode empilhar quantas condições quiser:

vrbl = (cond1) ? val1 : (cond2) ? val2 : val3;
Por exemplo:

int score = 100;
std::string result = (score == 100) ? "Perfect!" : (score >= 90) ? "Excellent" : "Good";
Neste exemplo, como score == 100 é true, result será atribuída "Perfect!". Se a pontuação fosse 95, seria atribuída "Excellent".


Desafio

Iniciante
Crie um programa que verifica se um número é positivo, negativo ou zero usando o operador condicional. O programa deve:

Receber uma entrada inteira do usuário.
Usar o operador condicional para determinar se o número é positivo, negativo ou zero.
Imprimir o resultado no formato: "The number is [positive/negative/zero]".
*/
#include <iostream>

int main() {
    int number;
    std::cin >> number;
    std::string result = "";
    
    // Write your code below
    result = (number > 0) ? "positive": (number < 0) ? "negative": "zero";
    
    std::cout << "The number is " << result << std::endl;
    return 0;
}