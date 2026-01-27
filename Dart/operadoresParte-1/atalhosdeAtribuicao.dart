//Em Dart, atalhos de atribuição combinam operadores aritméticos com atribuição para modificar variáveis de forma concisa.
// 1. Atribuição de Adição (+=)
void main() {
  int score = 10;
  score += 5;  // Equivalente a: score = score + 5;
  print('Score after adding 5: $score');
}

// 2. Atribuição de Subtração (-=)
void main() {
  int lives = 3;
  lives -= 1;  // Equivalente a: lives = lives - 1;
  print('Lives after losing 1: $lives');
}

// 3. Atribuição de Multiplicação (*=)
void main() {
  int points = 5;
  points *= 2;  // Equivalente a: points = points * 2;
  print('Points after doubling: $points');
}

// 4. Atribuição de Divisão (/=)
void main() {
  double price = 100.0;
  price /= 2;  // Equivalente a: price = price / 2;
  print('Price after 50% discount: $price');
}

/*
Desafio

Fácil
Crie um programa que rastreia as estatísticas de jogo de um jogador usando atalhos de atribuição:

Declare uma variável inteira score com um valor inicial de 100
Declare uma variável inteira bonus com um valor inicial de 50
Declare uma variável inteira multiplier com um valor inicial de 2
Declare uma variável inteira penalty com um valor inicial de 30

Imprima a pontuação inicial com a mensagem: Initial score: 100

Use o operador += para adicionar o bônus à pontuação
Imprima a pontuação após adicionar o bônus: Score after bonus: 150

Use o operador *= para multiplicar a pontuação pelo multiplicador
Imprima a pontuação após aplicar o multiplicador: Score after multiplier: 300

Use o operador -= para subtrair a penalidade da pontuação
Imprima a pontuação final: Final score: 270
Sua saída deve corresponder exatamente ao formato mostrado acima.
*/
void main() {
  // Declare your variables here
  int score = 100;
  int bonus = 50;
  int multiplier = 2;
  int penalty = 30;
  
  // Print initial score
  print("Initial score: $score");
  
…  print("Score after multiplier: $score");
  
  // Subtract penalty using -= operator
  score -= penalty;
  
  // Print final score
  print("Final score: $score");
}