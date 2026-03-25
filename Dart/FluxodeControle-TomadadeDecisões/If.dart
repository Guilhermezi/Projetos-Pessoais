/*
A instrução if em Dart avalia uma condição booleana e executa o código apenas quando essa condição é true.

if (condition) {
  // Código a ser executado quando a condição for true
}
Exemplo verificando se um número é positivo:

void main() {
  int number = 10;
  
  if (number > 0) {
    print('The number is positive');
  }
}
Você pode usar qualquer expressão booleana como condição:

void main() {
  int age = 20;
  bool hasLicense = true;
  
  if (age >= 18 && hasLicense) {
    print('You can drive');
  }
}

Desafio

Fácil
Crie um programa que determina se um aluno passou ou reprovou em uma prova com base na sua pontuação:

Declare uma variável inteira nomeada examScore com um valor de 68
Declare uma constante inteira nomeada passingGrade com um valor de 70
Use uma declaração if para verificar se a pontuação do aluno é menor que a nota de aprovação
Se a pontuação for menor que a nota de aprovação, imprima: Exam status: Failed. You need to improve by X points. (onde X é o número de pontos necessários para atingir a nota de aprovação)
Se a pontuação for igual ou maior que a nota de aprovação, imprima: Exam status: Passed. Good job!
Sua saída deve corresponder exatamente ao formato esperado.
*/
void main() {
  // Declarando as variáveis conforme o desafio
  int examScore = 68;
  const int passingGrade = 70;
  
  // Verifica se a pontuação é menor que a nota de aprovação
  if (examScore < passingGrade) {
    // Calcula a diferença necessária
    int pointsNeeded = passingGrade - examScore;
    print("Exam status: Failed. You need to improve by $pointsNeeded points.");
  } else {
    print("Exam status: Passed. Good job!");
  }
}
