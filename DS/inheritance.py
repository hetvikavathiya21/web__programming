class festivals:
    def celebrate(self):
        print("Festivals enhance cultural and social relations.")

class Diwali(festivals):
    def celebrate1(self):
        print("with crackers")

class Holi(festivals):
    def celebrate1(self):
        print("with colors")


d1=Diwali()
d1.celebrate()
d1.celebrate1()

print("\n")

h1=Holi()
h1.celebrate()
h1.celebrate1()
