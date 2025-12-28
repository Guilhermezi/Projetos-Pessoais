#Receba 2 números inteiros, verifique qual o maior entre eles. Calcule e mostre o resultado da somatória dos números ímpares entre esses valores.#

numero = int(input("Dígite um valor: "))
numero2 = int(input("Dígite um valor: "))
soma = 0

if numero < numero2:
  numero += 1
  while numero < numero2:

    if numero % 2 != 0:
      soma += numero 
    numero += 1
  print(soma)

else:
  numero2 += 1
  while numero2 < numero:
    if numero2 % 2 != 0:
       soma += numero2
    numero2 +=1

  print(soma)


