/*
O operador condicional (?:) fornece uma maneira concisa de escrever instruções if-else em uma linha:

condition ? expressionIfTrue : expressionIfFalse
Exemplo:

void main() {
  int age = 20;
  String status = age >= 18 ? 'Adult' : 'Minor';
  
  print(status);
}
Saída: Adult

Ele funciona com diferentes tipos de dados e é ideal para atribuições condicionais simples.


Desafio

Fácil
Crie um programa que usa o operador condicional (?:) para determinar se um jogador tem pontos suficientes para subir de nível em um jogo:

Declare uma variável inteira playerScore com um valor de 750
Declare uma variável inteira levelUpThreshold com um valor de 500
Use o operador condicional para criar uma mensagem de string que diga ou:
"Level up!" se a pontuação do jogador for maior ou igual ao limite
"Keep trying!" se a pontuação do jogador for menor que o limite
Armazene esta mensagem em uma variável de string chamada message
Imprima a pontuação do jogador no formato: Player score: 750
Imprima a mensagem
Atualize a pontuação do jogador para 450
Use o operador condicional novamente para atualizar a mensagem com base na nova pontuação
Imprima a pontuação atualizada do jogador no formato: Player score: 450
Imprima a mensagem atualizada
Sua saída deve corresponder exatamente ao formato esperado.
*/
void main() {
  // Declare your variables here
  int playerScore = 750;
  int levelUpThreshold = 500;
  
  // Use conditional operator to create the first message
  String message = playerScore >= levelUpThreshold ? "Level up!" : "Keep trying!";
  
  // Print player score and message
  print("Player score: $playerScore");
  print(message);
  
  // Update player score
  playerScore = 450;
  
  // Use conditional operator to update the message
  message = playerScore >= levelUpThreshold ? "Level up!" : "Keep trying!";
  
  // Print updated player score and message
  print("Player score: $playerScore");
  print(message);
}
