<?php
echo "Enter your number";
$randomnumber = rtrim(fgets(STDIN));
$store_array=array();
for ($x = 0; $x <= $randomnumber; $x++) {
    array_push($store_array,$x);
    echo "$x \n";
}; 

print_r($store_array);

#ForEach has a same approach as the for
#but the different is that this loop cannot be determined based on value. 
#They see that inside the variable, they can use the members inside it, so that "ForEach" uses each of them.
foreach ($store_array as $store) {
    echo "The number is: $store \n";
} 

?>