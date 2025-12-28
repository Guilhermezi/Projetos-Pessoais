#Faça um algoritmo que leia um valor qualquer e imprima na tela com um reajuste de 5%.#
num5 = int(input("Digite um número: "))
reajuste = num5 * 5 / 100 + num5
print(f"O´valor de {num5} com um reajuste de 5% é: {reajuste}")