/*
O operador de acesso null-aware (?.) acessa com segurança propriedades em objetos potencialmente nulos, prevenindo erros em tempo de execução.

void main() {
  String? name = 'Dart';
  int? length = name?.length;
  
  print('Name: $name');
  print('Length: $length');
}
Com valores nulos, ele retorna null em vez de travar:

void main() {
  String? name = null;
  int? length = name?.length;
  
  print('Name: $name');
  print('Length: $length');
}

Desafio

Fácil
Crie um programa em Dart que demonstra o operador de acesso null-aware (?.) com um personagem de jogo:

Crie uma variável String anulável chamada playerName e defina-a como null
Crie uma variável int anulável chamada playerScore e defina-a como 100
Use o operador de acesso null-aware (?.) para obter o comprimento do playerName e armazene-o em uma variável chamada nameLength
Imprima a seguinte mensagem: Player name length: X (onde X é o valor de nameLength)
Atualize playerName para "Champion"
Use o operador de acesso null-aware novamente para obter o comprimento atualizado e armazene-o em nameLength
Imprima a mensagem atualizada: Player name length: X (onde X é o novo valor)
Imprima a pontuação do jogador com este formato: Player score: 100
*/
void main() {
  // Declare your nullable variables here
  String? playerName = null;
  int? playerScore = 100;
  
  // Get the length of playerName using ?. operator
  int? nameLength = playerName?.length;
  
  // Print the initial name length
  print("Player name length: $nameLength");
  
  // Update the playerName
  playerName = "Champion";
  
  // Get the updated length using ?. operator
  nameLength = playerName?.length;
  
  // Print the updated name length
  print("Player name length: $nameLength");
  
  // Print the player's score
  print("Player score: $playerScore");
}
