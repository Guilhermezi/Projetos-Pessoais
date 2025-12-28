n = int(input("Digite o valor de n para encontrar o N-ésimo termo da série: "))

if n <= 0:
  print("insira um valor inteiro positivo")
elif n == 1:
  print("O 1º termo da série de fibonacci é: 0")
elif n == 2:
  print("O 2º termo da série de fibonacci é: 1")
else:
  a, b = 0, 1

for n in range(2, n):
  a, b = b, a + b

print(f"o {n}-ésimo termo da série de fibonacci é {b}")