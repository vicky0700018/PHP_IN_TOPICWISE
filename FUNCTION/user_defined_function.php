<?php
// function greet (){
    
//     echo "This is a user defined function";
//     return;
// }
//  greet ();


 
function p($data){
echo "<pre>";
print_r($data);
echo "</pre>";
}
$x = array(
    "car1",
    "car2",
    "car3",
    "car4",
    "car5",
    "car6",
);
p($x);

$y = array(
    "car7",
    "car8",
    "car9",
    "car10",
    "car11",
    "car12",
);
p($y);

// <!-- Syntax of functions in PHP.
// To create a function, we call "function" and give it a name in the same way we give it to variables.

// Syntax: function <functionName>() {
    
//     function body.

// return if any

// }

// Arguments: These are the inputs that the function will manipulate -separate multiple inputs with commas.

// Syntax: function <functionName>(a, b) {
    
//     function body.
    
//     return if any
    
// } -->
    ?>