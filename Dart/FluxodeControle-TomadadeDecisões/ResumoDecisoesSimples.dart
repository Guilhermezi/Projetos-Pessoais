/*
Desafio

Médio
Crie um programa que analisa a elegibilidade de uma pessoa para diferentes tipos de carteiras de motorista com base na idade e experiência:

Declare uma variável inteira age com valor 19
Declare uma variável inteira drivingExperience com valor 2 (representando anos)
Declare uma variável booleana hasPassedTest com valor true
Implemente as seguintes regras de elegibilidade para carteira:
Se a pessoa tiver menos de 16 anos, imprima: Status: Not eligible for any driving license. Must be at least 16 years old.
Se a pessoa tiver 16 ou 17 anos:
Se passou no teste, imprima: Status: Eligible for a provisional license.
Se não passou no teste, imprima: Status: Not eligible yet. Need to pass the driving test.
Se a pessoa tiver 18 anos ou mais:
Se tiver menos de 1 ano de experiência de direção, imprima: Status: Eligible for a beginner license.
Se tiver 1-3 anos de experiência de direção, imprima: Status: Eligible for a regular license.
Se tiver mais de 3 anos de experiência de direção, imprima: Status: Eligible for an advanced license.
Após determinar o tipo de carteira, imprima uma linha de resumo no seguinte formato:
Summary: Age: 19, Experience: 2 years, Test Passed: true
Sua saída deve corresponder exatamente ao formato mostrado acima, mas com o status de licença apropriado com base nos valores das variáveis.
*/
void main() {
  // Variáveis iniciais
  int age = 19;
  int drivingExperience = 2;
  bool hasPassedTest = true;
  
  // Regras de elegibilidade
  if (age < 16) {
    print("Status: Not eligible for any driving license. Must be at least 16 years old.");
  } else if (age == 16 || age == 17) {
    if (hasPassedTest) {
      print("Status: Eligible for a provisional license.");
    } else {
      print("Status: Not eligible yet. Need to pass the driving test.");
    }
  } else if (age >= 18) {
    if (drivingExperience < 1) {
      print("Status: Eligible for a beginner license.");
    } else if (drivingExperience >= 1 && drivingExperience <= 3) {
      print("Status: Eligible for a regular license.");
    } else {
      print("Status: Eligible for an advanced license.");
    }
  }
  
  // Linha de resumo obrigatória
  print('Summary: Age: $age, Experience: $drivingExperience years, Test Passed: $hasPassedTest');
}
