// Inteiros (tipo int) são números inteiros sem decimais. Crie-os com:
void main() {
  int age = 25;
  print(age);
}

// Inteiros não precisam de aspas e podem ser usados em cálculos:
void main() {
  int score = 10;
  print(score);
  
  // Aumentar a pontuação
  score = 15;
  print(score);
  
  // Criar outro inteiro
  int bonus = 5;
  
  // Combinar inteiros
  int totalScore = score + bonus;
  print(totalScore);
}

// Desafio
/*Crie um programa que demonstre o uso de variáveis inteiras em Dart:

Crie uma variável inteira chamada age e atribua a ela o valor 25
Crie outra variável inteira chamada yearOfBirth e atribua a ela o valor 1998
Crie uma terceira variável inteira chamada currentYear e atribua a ela o valor 2023
Imprima todas as três variáveis em linhas separadas com rótulos descritivos*/

void main() {
  // Declare your integer variables here
  int age = 25;
  int yearOfBirth = 1998;
  int currentYear = 2023;
  
  // Print the variables with labels
  print("Age: $age");
  print("Year of birth: $yearOfBirth");
  print("Current year: $currentYear");
}