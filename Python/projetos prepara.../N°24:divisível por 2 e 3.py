valor = int(input("Digite um valor: "))

divisaopor2 = valor % 2
divisaopor3 = valor % 3

if divisaopor2 == 0:
  print("O número é divisível por dois")

elif divisaopor3 == 0 :
  print("O número é divisível por três")

else :
  print("O número não é divisível nem por três nem por dois")
