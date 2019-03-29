Word=input('Input your word please: ')
WordLength=len(Word)
TotalAlphaberE=0
for i in range (WordLength):
    if Word[i] in ['e','E']:
        TotalAlphaberE += 1
    else:
        pass
print (TotalAlphaberE) 

# this looping is a 'for' loop, which had a definite limit between the start (0) and the end (WordLength)
# As it want to command to do exactly as much as WordLength
#This program is to check whether it has an alphabet 'e' or 'E' inside the word, try it on :D