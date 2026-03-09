/*
O operador null-aware (??) retorna a expressão à esquerda se ela não for nula, caso contrário, retorna a expressão à direita.

void main() {
  String? name = 'Dart';
  String displayName = name ?? 'Guest';
  
  print('Hello, $displayName!');
}
void main() {
  String? name = null;
  String displayName = name ?? 'Guest';
  
  print('Hello, $displayName!');
}
void main() {
  int? score;  // Sem valor inicial, padrão para null
  int displayScore = score ?? 0;
  
  print('Your score: $displayScore');
  
  // Mais tarde no programa, score recebe um valor
  score = 100;
  displayScore = score ?? 0;
  
  print('Your updated score: $displayScore');
}

Desafio

Fácil
Crie um programa que demonstre o operador null-aware (??) em Dart:

Declare uma variável String anulável nomeada username e defina-a como null
Declare uma variável int anulável nomeada userAge e defina-a como null
Use o operador null-aware para atribuir um valor padrão de "Guest" a uma nova variável displayName se username for null
Use o operador null-aware para atribuir um valor padrão de 18 a uma nova variável displayAge se userAge for null
Imprima os valores no EXATO formato a seguir:
Username: Guest (default value used)
Age: 18 (default value used)
Em seguida:

Atualize username para "DartUser"
Atualize userAge para 25
Repita os passos 3 e 4 com os valores atualizados
Imprima os valores no EXATO formato a seguir:
Username: DartUser (original value used)
Age: 25 (original value used)
*/
void main() {
  // Declare nullable variables
  String? username; // Já inicia como null por padrão
  int? userAge = null;
  
  // Use null-aware operator for default values
  String displayName = username ?? "Guest";
  int displayAge = userAge ?? 18;
  
  // Print initial values
  print("Username: $displayName (default value used)");
  print("Age: $displayAge (default value used)");
  
  // Update variables
  username = "DartUser";
  userAge = 25;
  
  // Use null-aware operator again
  displayName = username ?? "Guest";
  displayAge = userAge ?? 18;
  
  // Print updated values
  print("Username: $displayName (original value used)");
  print("Age: $displayAge (original value used)");
}
