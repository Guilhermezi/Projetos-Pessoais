#Faça um algoritmo que calcule o IMC (Índice de Massa Corporal) de uma pessoa, leia o seu peso e sua altura e imprima na tela sua condição#

ALTURA = int(input("Qual a ua altura em centimetros: "))
PESO = int(input("Qual o seu peso: "))

ALTURA2x = ALTURA * 2

IMC = PESO / ALTURA2x

print("Seu imc é: ", IMC)