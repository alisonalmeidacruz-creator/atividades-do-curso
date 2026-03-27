vIdade = 0

vIdade=int(input("Digite sua idade: "))

if vIdade <= 12:
    print("Categoria infantil!")
else:
    if vIdade <= 18:
        print("Categoria juvena!")
    else:
        print("Categoria Adulto!")