#Abstract is all about hiding unnecessary processes and only show the results. 
#Let's take an example of a calculator.

import time
import os


class Calculator:
    def __init__(self):
        self.initiator
        
    def initiator (self):
        print("+++++++++++++++++ CALCULATOR +++++++++++++++++")
        print("1: Open calculator")
        print("99: Exit")
        self.value1=input('Masukkan pilihan anda: ')
        
        if self.value1 == '1':
            return self.calculator()
#            clear = lambda: os.system('clear') #--> For linux
            clear = lambda: os.system('cls')    #--> For Windows
            clear()
        elif self.value1 == '99':
            print("bye bye")
            return None
        else:
            print("Repeat once more, please")
            time.sleep(1)
            clear = lambda: os.system('clear')
            clear()
            return self.initiator()

    def calculator(self):
        print("+++++++++++++++++ CALCULATOR +++++++++++++++++")        
        self.value1=input("Enter Value 1 : ")
        self.value2=input("Enter Value 2 : ")
        print(self.value1 + "   " + self.value2)
        print("+++++++++++++++++ CALCULATOR +++++++++++++++++") 
        print("Please Enter Calculator Operation:") 
        print("1. Add Value") 
        print("2. Sub Value") 
        print("3. Multiply Value") 
        print("4. Divide Value") 
        print("+++++++++++++++++ CALCULATOR +++++++++++++++++") 
        self.value3=input("Your Choice:") 
        value1=int(self.value1)
        value2=int(self.value2)
        if self.value3== '1':
            return self.addi(value1,value2)
        elif self.value3== '2':    
            return self.sub(value1,value2)
        elif self.value3== '3':
            return self.mult(value1,value2)
        elif self.value3== '4':
            return self.divi(value1,value2)
        else:
            print("Please try again")
            time.sleep(1)
#            clear = lambda: os.system('clear') #--> For linux
            clear = lambda: os.system('cls')    #--> For Windows
            clear()
            return self.calculator()
    
    def addi(self,value1,value2):
        self.value3 = value1+value2
        print( "Hasil : " + str(self.value3))
    def sub(self,value1,value2):
        self.value3 = value1-value2
        print( "Hasil : " + str(self.value3))
    def mult(self,value1,value2):
        self.value3 = value1*value2
        print( "Hasil : " + str(self.value3))
    def divi(self,value1,value2):
        self.value3 = value1/value2
        print( "Hasil : " + str(self.value3))
    
c=Calculator()
c.initiator()