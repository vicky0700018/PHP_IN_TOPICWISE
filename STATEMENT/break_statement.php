<?php
$sum =0;
$i =1;
while($i<10){
    $sum+=$i;
    if($sum >10){
        break;
    }
    echo $i ."\n";
    $i++;
}
echo"-----------"."\n";
echo $sum ."\n";
echo"-----------"."\n";
echo"loops end";




// What is break statement?
// The break statement is used to break the execution of current loop or switch case.
// As soon as it is encountered the flow of the program goes to next statement of loop or switch case.

// Syntax: break;       It is also a keyword.

?>