<?php
echo "Enter your number";
$randomnumber = rtrim(fgets(STDIN));


#now pay attention to this one.
#There's only 1 variable used, and it is the start and end itself
#this is similar to Python one (if you learn it), with only one limit as the end spot
for ($x = 0; $x <= $randomnumber; $x++) {
    echo "The number is: $x \n";
} 

?>