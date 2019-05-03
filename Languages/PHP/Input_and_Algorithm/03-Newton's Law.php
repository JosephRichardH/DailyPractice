<?php
echo "Newton's law consists of mass and acceleration\n\n";
echo "Enter your mass (kg)\n";
$mass = rtrim(fgets(STDIN));
sleep(1);
echo "\nEnter your acceleration (m/s2) ";
$accel = rtrim(fgets(STDIN));
$force = $mass * $accel; 
echo "Your force, based on Newton's Law is $force";

#Here, the important parts are:  
#1. rtrim: to prevent any unnecessary \n input.
#2. fgets: abbrevation of file-get-standard, function in C to reveive input, with fillings..
#3. STDIN: abbrevation of standard<STD> input<IN> ==> (STD+IN = STDIN).
#2&3. When 2 and 3 joined, they made as if they ready one line above them.

?>