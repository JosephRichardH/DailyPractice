#On conditionals, only 'if' clause is awailable to be utilised.
#for example like this program
result='' #Defining that the result will be in string
def WordCheck(input):
    if input > 0:
        result = '%d is positive' %input
    else:
        result = '%d is either zero or less than zero' %input
    return result

#print(WordCheck(u)) #--> Returns NameError
print(WordCheck(5)) #--> Returns positive
print(WordCheck(-8)) #--> Returns error

#To test each of one, make sure the unused one is signed with '#' on the front

#in addition, the 'def' is a start-point for the function, which will be learn after we learn about looping