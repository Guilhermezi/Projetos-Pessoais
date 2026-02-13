Operadores de comparação no Dart retornam valores booleanos, essenciais para tomada de decisões.
void main() {
  int a = 10;
  int b = 10;
  bool areEqual = a == b;
  
  print('Is $a equal to $b? $areEqual');
}

O Dart oferece: igualdade (==), desigualdade (!=), maior que (>), menor que (<), maior ou igual a (>=), e menor ou igual a (<=).


Desafio

Iniciante
Crie um programa que compara duas pontuações de jogo usando operadores de comparação:

Declare duas variáveis inteiras: playerScore com um valor de 85 e highScore com um valor de 90
Use os operadores de comparação para verificar:
Se playerScore é igual a highScore
Se playerScore não é igual a highScore
Se playerScore é maior que 80
Se playerScore é menor que highScore
Se playerScore é maior ou igual a 85
Se playerScore é menor ou igual a 100
Armazene cada resultado de comparação em uma variável booleana com um nome descritivo
Imprima todos os resultados com rótulos exatamente como mostrado na saída esperada
Sua saída deve corresponder exatamente a este formato:

Player score: 85
High score: 90
Scores are equal: false
Scores are different: true
Player score > 80: true
Player score < High score: true
Player score >= 85: true
Player score <= 100: true

void main() {
  // Declare the score variables here
  int playerScore = 85;
  int highScore = 90;
  
  // Perform comparisons and store results in boolean variables
  bool scoresEqual = playerScore == highScore;
  bool scoresDifferent = playerScore != highScore;
  bool scoreAbove80 = playerScore > 80;
  bool scoreLessThanHigh = playerScore < highScore;
  bool scoreAtLeast85 = playerScore >= 85;
  bool scoreAtMost100 = playerScore <= 100;
  
  // Print the scores and comparison results
  print("Player score: $playerScore");
  print("High score: $highScore");
  print("Scores are equal: $scoresEqual");
  print("Scores are different: $scoresDifferent");
  print("Player score > 80: $scoreAbove80");
  print("Player score < High score: $scoreLessThanHigh");
  print("Player score >= 85: $scoreAtLeast85");
  print("Player score <= 100: $scoreAtMost100");
}