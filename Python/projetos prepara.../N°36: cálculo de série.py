numeron = int(input("Dígite um valor positivo: ")) 
soma = 1 
divisor = 1 
while divisor <= numeron: 
  divisao = numeron / divisor 
  soma = numeron + divisao 
  divisor += 1 
  print(f"A série de {numeron:.2f} é {soma:.2f} ")