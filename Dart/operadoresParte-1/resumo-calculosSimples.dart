/*
Desafio

Fácil
Você está desenvolvendo um calculador simples de pontuação de jogo que rastreia o progresso de um jogador através de diferentes níveis. Siga estes passos cuidadosamente para criar seu programa:

Passo 1: Inicializar Variáveis
Criar uma variável inteira chamada playerScore e defina-a como 100
Criar uma variável inteira chamada currentLevel e defina-a como 5
Passo 2: Calcular Estatísticas do Jogo
Calcule e armazene estes valores em novas variáveis:

Bônus de Nível: Multiplique o nível atual por 20 e armazene o resultado em uma variável chamada levelBonus
Power-ups Disponíveis: Cada power-up custa 25 pontos. Use a divisão inteira (~/) para descobrir quantos power-ups completos o jogador pode comprar com sua pontuação atual. Armazene isso em powerUps
Pontos Restantes: Use o operador módulo (%) para descobrir quantos pontos sobram após comprar todos os power-ups possíveis. Armazene isso em remainingPoints
Passo 3: Atualizar Pontuação e Nível do Jogador
Adicione o bônus de nível à pontuação do jogador usando o operador +=
Aumente o nível atual em 1 usando o operador de incremento prefixado (++currentLevel) e armazene este novo valor em uma variável chamada newLevel
Subtraia 15 pontos da pontuação do jogador usando o operador -=
Dobre a pontuação do jogador multiplicando-a por 2 usando o operador *=
Passo 4: Exibir Resultados
As instruções de print já estão fornecidas no código. Seu trabalho é preencher o código ausente para que a saída corresponda exatamente.

Importante: Certifique-se de que seus cálculos sejam feitos na ordem exata especificada acima, pois cada passo afeta o próximo.
*/
void main() {
  // Initialize player score and level
  int playerScore = 100;
  int currentLevel = 5;
  
  // Calculate level bonus, power-ups, and remaining points
  int levelBonus = currentLevel * 20;
  int powerUps = playerScore ~/ 25;
  int remainingPoints = playerScore % 25;
  
  // Add level bonus to score using assignment shortcut
  playerScore += levelBonus;
  
  // Increment level and store new level
  int newLevel = ++currentLevel;
  
  // Decrease score by 15 using assignment shortcut
  playerScore -= 15;
  
  // Calculate final score (multiply by 2)
  playerScore *= 2;
  
  // Print the results
  print('Initial score: 100');
  print('Level bonus: $levelBonus');
  print('Available power-ups: $powerUps');
  print('Remaining points: $remainingPoints');
  print('New level: $newLevel');
  print('Score after bonus and penalty: ${playerScore / 1.5}');
  print('Final score with multiplier: $playerScore');