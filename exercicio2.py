vNumero, vResto = 0, 0

vNumero=int(input("Entre com um valor: "))

vResto=vNumero%2

if vResto == 0:
    print("Número par!")
else:
    print("Número ímpar!")