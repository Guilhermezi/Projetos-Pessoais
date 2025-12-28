nota1 = float(input("digite a primeira nota de um aluno: "))
nota2 = float(input("digite a segunda nota de um aluno: "))
nota3 = float(input("digite a terceira nota de um aluno: "))
nota4 = float(input("digite a quarta nota de um aluno: "))

media = (nota1+nota2+nota3+nota4)/4
print("A média do aluno foi:" , media)

if media >= 6:
  print("O aluno foi aprovado")

elif media >= 3:
  print("O aluno vai ter que fazer um exame")

else:
  print("Aluno foi Retido")

