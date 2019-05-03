<?php
echo "Official: What is your name?\n You: ";
$input1 = rtrim(fgets(STDIN));
echo "\nOfficial: Lemme repeat, your name is $input1, ";
sleep(1);
echo "And your age? \n You: ";
$input2 = rtrim(fgets(STDIN));
echo "\nOfficial: Lemme repeat, your name is $input1 and your age is $input2 years old, right?";

#"Here, the important parts are:";  
#1. rtrim: to prevent any unnecessary \n input.
#2. fgets: abbrevation of file-get-standard, function in C to reveive input, with fillings..
#3. STDIN: abbrevation of standard<STD> input<IN> ==> (STD+IN = STDIN).
#2&3. When 2 and 3 joined, they made as if they ready one line above them.
?>