import sys


primeiroN = int(input("Digite um número de uma ordem crescente: "))
segundoN = int(input("Digite outro número da ordem crescente: "))


if segundoN <= primeiroN:
  print("O número digitado não está de acordo com o pedido")
  sys.exit()

else:
 terceiroN = int(input("Digite outro número da ordem crescente: "))

if terceiroN <= segundoN:
    print("O número digitado não está de acordo com o pedido")
    sys.exit()

else:
 quartoN = int(input("Digite um número não necesariamente em ordem: "))

if quartoN <= primeiroN:
 print("A ordem dos números é:" ,quartoN ,primeiroN ,segundoN ,terceiroN)

elif quartoN <= segundoN:
   print("A ordem dos números é:" ,primeiroN ,quartoN ,segundoN ,terceiroN)

elif quartoN <= terceiroN:
 print("A ordem dos números é:" ,primeiroN ,segundoN ,quartoN ,terceiroN)

else:
  print("A ordem dos números é:" ,primeiroN ,segundoN ,terceiroN ,quartoN)

