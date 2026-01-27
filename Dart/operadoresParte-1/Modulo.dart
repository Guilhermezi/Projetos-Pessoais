/*  operador módulo (%) nos dá o resto após a divisão. Vamos explorar como ele funciona com alguns exemplos diretos.

Operação Básica de Módulo */

void main() {
  int dividend = 10;
  int divisor = 3;
  int remainder = dividend % divisor;
  
  print('Remainder of $dividend ÷ $divisor = $remainder');
}

/* Saída: Remainder of 10 ÷ 3 = 1

Quando dividimos 10 por 3, obtemos 3 com um resto de 1. O operador módulo % captura esse valor de resto.

Verificando Números Pares e Ímpares

Podemos determinar se um número é par ou ímpar usando o operador módulo: */
void main() {
  int number = 15;
  int remainder = number % 2;
  
  print('$number % 2 = $remainder');
  
  // Números pares têm resto 0 quando divididos por 2
  bool isEven = remainder == 0;
  
  // Usando avaliação booleana direta em vez de if/else
  String result = isEven ? '$number is even' : '$number is odd';
  print(result);
}
// Saída:
15 % 2 = 1
15 is odd

/*
Desafio

Fácil
Crie um programa que usa o operador módulo (%) para resolver os seguintes problemas:

Declare uma variável inteira totalMinutes com um valor de 197
Calcule e armazene o número de horas completas em totalMinutes usando divisão inteira
Calcule e armazene os minutos restantes usando o operador módulo
Imprima o tempo em horas e minutos no EXATO seguinte formato:
197 minutes is 3 hours and 17 minutes.
Então:

Declare uma variável inteira coins com um valor de 57
Calcule e armazene quantas moedas de 25 (25 moedas) podem ser formadas a partir de coins
Calcule e armazene as moedas restantes usando o operador módulo
Imprima o resultado no EXATO seguinte formato:
57 coins can be divided into 2 quarters and 7 remaining coins. */
void main() {
  // Declare your variables here
  int totalMinutes = 197;
  
  // Calculate hours and remaining minutes
  int hours = totalMinutes ~/ 60;
  int remainingMinutes = totalMinutes % 60;
  
  // Print the time result
  print("$totalMinutes minutes is $hours hours and $remainingMinutes minutes.");
  
  // Calculate quarters and remaining coins
  int coins = 57;
  int quarters = coins ~/ 25;
  int remainingCoins = coins % 25;
  
  // Print the coins result
  print("$coins coins can be divided into $quarters quarters and $remainingCoins remaining coins.");
}