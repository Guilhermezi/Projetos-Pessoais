// Operadores aritméticos no Dart realizam cálculos matemáticos: adição (+), subtração (-), multiplicação (*) e divisão (/).
void main() {
  int num1 = 10;
  int num2 = 5;
  int sum = num1 + num2;
  
  print('Sum: $num1 + $num2 = $sum');
}

void main() {
  int num1 = 10;
  int num2 = 5;
  int difference = num1 - num2;
  
  print('Difference: $num1 - $num2 = $difference');
}

void main() {
  int num1 = 10;
  int num2 = 5;
  int product = num1 * num2;
  
  print('Product: $num1 * $num2 = $product');
}

void main() {
  int intValue = 5;
  double doubleValue = 2.5;
  double result = intValue + doubleValue;
  
  print('$intValue + $doubleValue = $result');
}

/*
Desafio

Iniciante
Crie um programa em Dart que realize operações aritméticas básicas:

Declare uma variável inteira chamada num1 com o valor de 10
Declare uma variável inteira chamada num2 com o valor de 5
Calcule e armazene as seguintes operações em variáveis adequadamente nomeadas:
A soma de num1 e num2 (armazene em sum)
A diferença quando num2 é subtraído de num1 (armazene em difference)
O produto de num1 e num2 (armazene em product)
O resultado quando num1 é dividido por num2 (armazene em quotient como um double)
Imprima cada resultado com o EXATO seguinte formato:
Sum: 15
Difference: 5
Product: 50
Quotient: 2.0
Sua saída deve corresponder exatamente a este formato.
*/
void main() {
  // Declare your variables here
  int num1 = 10;
  int num2 = 5;
  
  // Perform arithmetic operations
  int sum = num1 + num2;
  int difference = num1 - num2;
  int product = num1 * num2;
  double quotient = num1 / num2;
  
  // Print the results
  print("Sum: $sum");
  print("Difference: $difference");
  print("Product: $product");
  print("Quotient: $quotient");
}