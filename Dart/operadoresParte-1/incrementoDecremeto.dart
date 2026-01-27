// Em Dart, os operadores de incremento (++) e decremento (--) aumentam ou diminuem o valor de uma variável em 1.
void main() {
  int count = 5;
  count++;  // Increases count by 1
  print('After increment: $count');
}

void main() {
  int score = 10;
  score--;  // Decreases score by 1
  print('After decrement: $score');
}

void main() {
  int a = 5;
  int b = 5;
  
  // Prefix increment: increment first, then use the value
  int resultA = ++a;
  
  // Postfix increment: use the current value, then increment
  int resultB = b++;
  
  print('a: $a, resultA: $resultA');
  print('b: $b, resultB: $resultB');
}

/*
Desafio

Fácil
Crie um programa que demonstre os operadores de incremento (++) e decremento (--) em Dart:

Declare uma variável inteira chamada score com um valor inicial de 10
Imprima o score inicial com o rótulo: Initial score: 10
Use o operador de pré-incremento (++score) e armazene o resultado em uma variável chamada newScore
Imprima o novo score com o rótulo: After pre-increment: 11
Imprima o valor atual da variável score original com o rótulo: Current score: 11
Use o operador de pós-decremento (score--) e armazene o resultado em uma variável chamada postDecrementResult
Imprima o resultado do pós-decremento com o rótulo: Post-decrement result: 11
Imprima o score final com o rótulo: Final score: 10
Sua saída deve corresponder exatamente ao formato esperado.
*/
void main() {
  // Declare your score variable here
  int score = 10;
  
  // Print initial score
  print("Initial score: $score");
  
  // Use pre-increment operator
  int newScore = ++score;
  
  // Print new score and current score
  print("After pre-increment: $newScore");
  print("Current score: $score");
  
  // Use post-decrement operator
  int postDecrementResult = score--;
  
  // Print post-decrement result and final score
  print("Post-decrement result: $postDecrementResult");
  print("Final score: $score");
}