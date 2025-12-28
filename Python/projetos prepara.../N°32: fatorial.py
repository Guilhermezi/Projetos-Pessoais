fator = int(input("Digite um número para descobrir o fatorial: "))

conta = 1
resultado = 1

while conta <= fator :
  resultado *= conta
  conta += 1

print ("O fatorial de" ,fator ,"é:" ,resultado)
