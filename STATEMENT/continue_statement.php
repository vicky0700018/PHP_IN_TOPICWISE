<?php
// for ($i=0; $i <=10 ; $i++){
//     if ($i == 5){
//         continue;
//     }
//     echo "$i"."\n";
// }
$count=0;
for ($i=0; $i <=20 ; $i++){
    // if ($i%2 == 0){
    if ($i%2 != 0){
        continue;
    }
    $count++;
    echo "$i"."\n";
}
echo "-----------"."\n";
echo "$count";



// the continue statement is used to skip the current iteration and go the next iteration;

// syntex:continue;
?>