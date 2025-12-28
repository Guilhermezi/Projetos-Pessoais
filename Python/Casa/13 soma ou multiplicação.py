#Faça um algoritmo que leia dois valores inteiros A e B, se os valores de A e B forem iguais, deverá somar os dois valores, caso contrário devera multiplicar A por B. Ao final de qualquer um dos cálculos deve-se atribuir o resultado a uma variável C e imprimir seu valor na tela.#

numA = int(input("Dígite um número aleatorio: "))
numB = int(input("Dígite um número aleatorio: "))

if numA == numB:
  soma_numC = numA + numB
  print(f"O resultado da soma de {numA} e {numB} é :{soma_numC}")

else:
  multiplicaçao_numC = numA * numB
  print(f"O resultado da multiplicação de {numA} e {numB} é :{multiplicaçao_numC}")
