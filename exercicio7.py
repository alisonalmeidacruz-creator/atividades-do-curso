vNum1, vNum2, vNum3, vMaior, vMenor = 0, 0, 0, 0 ,0

vNum1=int(input("Digite o primeiro número: "))
vNum2=int(input("Digite o segundo número: "))
vNum3=int(input("Digite o terceiro número: "))

vMaior=vNum1
vMenor=vNum1

if vNum2 > vMaior:
    vMaior=vNum2
if vNum3 > vMaior:
    vMaior=vNum3
if vNum2 < vMenor:
    vMenor=vNum2
if vNum3 < vMenor:
    vMenor=vNum3
if vNum1 == vNum2 and vNum2 == vNum3:
    print("Todos iguais!")
elif vNum1 == vNum2 or vNum1 == vNum3 or vNum2 == vNum3:
    print("Dois números são iguais")

print("Maior: ", vMaior)
print("Menor: ", vMenor)