<?php

use const Dom\SYNTAX_ERR;

$arr=[
"html"=>2500,
"css"=>2500,
"js"=>3000,
"php"=>4000,
"laravel"=>8000,
];
echo "<pre>";
print_r($arr);
echo "</pre>";



// SYNTAX 
// foreach ($arr as $key => $value) {
    
// }

foreach ($arr as $course => $fees) {
    echo "the fees of $course is Rs. $fees <\n>";

}

$fruits = ["Apple", "Banana", "Mango", "Orange"];

foreach ($fruits as $fruit) {
    echo $fruit . "<\n>";
}



$person = [
    "name" => "Vicky",
    "age" => 22,
    "city" => "Delhi"
];

foreach ($person as $key => $value) {
    echo $key . " : " . $value . "<\n>";
}



?>