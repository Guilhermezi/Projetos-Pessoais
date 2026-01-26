// A divisão inteira do Dart (~/) retorna um inteiro truncando as partes decimais, ao contrário da divisão regular (/), que retorna um double.
void main() {
  int num1 = 10;
  int num2 = 3;
  int result = num1 ~/ num2;
  
  print('Integer division: $num1 ~/ $num2 = $result');
}
// Saída: Integer division: 10 ~/ 3 = 3
void main() {
  int num1 = 10;
  int num2 = 3;
  
  double regularDivision = num1 / num2;
  int integerDivision = num1 ~/ num2;
  
  print('Regular division: $num1 / $num2 = $regularDivision');
  print('Integer division: $num1 ~/ $num2 = $integerDivision');
}
/*
Desafio

Iniciante
Crie um programa que demonstre a divisão inteira em Dart:

Declare duas variáveis inteiras: totalApples com um valor de 17 e numberOfPeople com um valor de 5
Calcule quantas maçãs cada pessoa recebe usando divisão inteira (~/) e armazene o resultado em uma variável chamada applesPerPerson
Calcule quantas maçãs sobrarão usando o operador módulo (%) e armazene o resultado em uma variável chamada remainingApples
Imprima os resultados no EXATO seguinte formato:
Each person gets: 3 apples
Remaining apples: 2
Sua saída deve corresponder exatamente a este formato.
*/
void main() {
  // Declare your variables here
  int totalApples = 17;
  int numberOfPeople = 5;
  
  // Calculate apples per person and remaining apples
  int applesPerPerson = totalApples ~/ numberOfPeople;
  int remainingApples = totalApples % numberOfPeople;
  
  // Print the results
  print("Each person gets: $applesPerPerson apples");
  print("Remaining apples: $remainingApples");
}