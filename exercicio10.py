vCompra, vDesconto, vTotal = 0.0, 0.0, 0.0

vCompra=float(input("Digite o valor da compra: "))

if vCompra <= 100:
    vDesconto=vCompra*0.02
elif vCompra <=300:
    vDesconto=vCompra*0.05
elif vCompra <= 700:
    vDesconto=vCompra*0.09
elif vCompra <= 1200:
    vDesconto=vCompra*0.12
else:
    vDesconto=vCompra*0.15
    
vTotal=vCompra-vDesconto
print(f"Valor do desconto: {vDesconto:.2f}")
print(f"Valor total da compra: {vTotal:.2f}")
