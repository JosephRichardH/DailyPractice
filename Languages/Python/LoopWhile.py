Word=input('Input your word please: ')
WordLength=len(Word)
print(WordLength)
TotalAlphaberE=0
counter=0
while counter<WordLength:
    print(Word[counter])
    if Word[counter] in ['a','b']:
        TotalAlphaberE += 1
    else:
        pass
    counter=counter+1
print (TotalAlphaberE) 
print (counter) 

# this looping is a 'while' loop, which had a definite final condition when 'counter' reaches WordLength
# As it want to command to do until condition in while is satisfied
#This program is to check whether it has an alphabet 'e' or 'E' inside the word, try it on :D