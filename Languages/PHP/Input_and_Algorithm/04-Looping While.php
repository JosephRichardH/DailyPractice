<?php
echo "Enter your number";
$randomnumber = rtrim(fgets(STDIN));
#A vriable to start everything from zero for two while(s)
$while1 = 0; 
$while2 = 0; 

#   There are 2 type of while(s):
#   1. Do first then repeat.
#   2. Check first then do.
#
#   Let's say, we input this $randomnumber to 4, and read this program first 
#
#   Program 1 : While (...) {....}, this is the type which evaluate the commands first, then do the execcution.

while($while1 <= $randomnumber) {
    echo "The number is: $while1 \n";
    $while1++;
} 

echo "\n\n";

#And now, compare to this one, which do the commands first rather than checks it.
do {
    echo "The number is: $while2 \n";
    $while2++;
} while ($while2 <= $randomnumber);

# Use these properties to make advantage of the programmings.
?>