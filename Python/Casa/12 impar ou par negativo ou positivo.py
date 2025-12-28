
numero =int(input("me dê um valor qualquer: "))
if numero < 0:
  print(f"O número {numero} é negativo")
else:
  print(f"O número {numero} é positivo")

divisaopor2 = numero % 2
divisaopor3 = numero % 3

if divisaopor2 == 0:
  print(f"O número {numero} é par ")

else:
  print(f"O número {numero} é impar ")

