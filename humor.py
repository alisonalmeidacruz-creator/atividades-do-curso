arthur = ''

arthur = str(input("Arthur faltou? (sim/não): ")).lower()
while arthur not in ["sim", "nao"]:
    print("A resposta aceita somente sim ou nao!")
    arthur = input("Arthur faltou? (sim/nao): ").lower()

if arthur == "sim":
    print("UHULL! Heberson está feliz!!😁")
else:
    print("Ahhh, Heberson está sem paciência...😞")