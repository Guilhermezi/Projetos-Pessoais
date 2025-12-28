numero = int(input("Dígite um número:"))

conta = 1
resultado = 0

while  conta <= numero :

  resultado += 1 / conta 
  conta += 1

print(f"O resultado da sequencia é: {resultado:.2f}")