#Faça um algoritmo que leia três notas obtidas por um aluno, e imprima na tela a média das notas#

nota_de_port = float(input("Nota de português no 1º bimestre: "))
nota_de_port2 = float(input("Nota de português no 1º bimestre: "))
nota_de_port3 = float(input("Nota de português no 1º bimestre: "))

soma = nota_de_port +nota_de_port2 + nota_de_port3
media = soma /3
print(f"A media do aluno é: {media:.2f}")
