vSalario, vReajuste, vNovoSalario = 0.0, 0.0, 0.0
vTempo = 0

vSalario=float(input("Digite o salário: "))
vTempo=int(input("Digite o tempo na empresa: "))

if vSalario > 3000 and vTempo > 5:
    vReajuste=vSalario*0.09
else:
    if vSalario <= 3000 and vTempo > 5:
        vReajuste=vSalario*0.12
    else:
        vReajuste=vSalario*0.10
        
vNovoSalario=vSalario+vReajuste
print(f"Valor do reajuste: {vReajuste:.2f}")
print(f"Valor do novo salário: {vNovoSalario:.2f}")
