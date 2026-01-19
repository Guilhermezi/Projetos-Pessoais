// Booleanos (bool type) têm apenas dois valores: true ou false. Eles representam condições sim/não em programas.
void main() {
  bool isRaining = true;
  print(isRaining);
}

// Valores booleanos são escritos sem aspas. Você pode reatribuí-los:
void main() {
  bool isCompleted = false;
  print(isCompleted);
  
  // Alterar o valor
  isCompleted = true;
  print(isCompleted);
}

/*Desafio
Crie um programa em Dart que trabalha com valores booleanos para rastrear o status de um personagem de jogo simples:

Declare uma variável booleana chamada isAlive e defina-a como true
Declare uma variável booleana chamada hasWeapon e defina-a como false
Declare uma variável inteira chamada healthPoints e defina-a como 100
Declare uma variável double chamada speed e defina-a como 7.5
Imprima todas as variáveis com rótulos descritivos no EXATO seguinte formato:
Character Status:
Alive: true
Armed: false
Health: 100
Speed: 7.5
Sua saída deve corresponder exatamente a este formato.*/

void main() {
  // Declare your variables here
  bool isAlive = true;
  bool hasWeapon = false;
  int healthPoints = 100;
  double speed = 7.5;
  
  // Print the character status
  print("Character Status:");
  print("Alive: " + isAlive.toString());
  print("Armed: " + hasWeapon.toString());
  print("Health: " + healthPoints.toString());
  print("Speed: " + speed.toString());
}