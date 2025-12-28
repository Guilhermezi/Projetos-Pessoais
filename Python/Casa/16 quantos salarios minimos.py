# Faça um algoritmo que leia o valor do salário mínimo e o valor do salário de um usuário, calcule quantos salários mínimos esse usuário ganha e imprima na tela o resultado. (Base para o Salário mínimo R$ 1.293,20).#
salario = int(input("Qual seu salário: "))
salariomin = 1293.20
caixa = 0
multiplicacao = 1293.20

while salario >= multiplicacao:
  caixa = caixa + 1
  multiplicacao = 1293.20 * caixa 
print(f"Você recebe {caixa} salários mínimos, o que é igual a: {multiplicacao:.2f}")