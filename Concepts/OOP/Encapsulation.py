#This example is to show the color and size of the house as mentioned. Let's take a look at encapsulation
class House:
    def __init__(self,color,length,width):
        self.color=color
        self.length=length
        self.width=width
#This def above, is the example of encapsulation. It wraps any necessary attributes/ variables to one class
#After that, It can utilize the data with any function below.

    def printhouse(self):
        return "The house is " + self.color + " with size " + str(self.length) + " x " + str(self.width)



B=House('Yellow',8,12)
C=House('Blue',20,10)
D=House('Red',50,25)

print(B.printhouse())
print(C.printhouse())
print(D.printhouse())
