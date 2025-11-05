<?php
$x = array(
    "car1",
    "car2",
    "car3",
    "car4",
    "car5",
    "car6",
);
echo "<pre>";
print_r($x);
echo "</pre>";
$y = array(
    "car7",
    "car8",
    "car9",
    "car10",
    "car11",
    "car12",
);
echo "<pre>";
print_r($y);
echo "</pre>";

$z= array_merge($x,$y);
echo "<pre>";
print_r($z);
echo "</pre>";
// $x = 5;
// if (is_array($car)) {
//     echo "car is an array";
// } else {
//     echo "car is not an array";
// }
// var_dump(is_array($x));
// echo array_search('car4' ,$car);
// echo "<pre>";
// $newcar =array_slice($car,1);
// print_r($newcar);
// echo "</pre>";

// $poped = array_pop($car);
// echo($poped);
// // echo "<pre>";
// print_r($car);
// // echo "</pre>";
// echo "<pre>";
// print_r($car);
// echo "</pre>";

// echo count($car);
// print_r(array_count_values($car));
// echo "<pre>";
// print_r(array_keys($car));
// echo "</pre>";
// var_dump(array_key_exists("F",$car));
// var_dump(array_key_exists("G",$car));

// array_push($car, "car7","car8","car9");
// echo "<pre>";
// print_r($car);
// echo "</pre>";

// echo "<pre>";
// $chucked =array_chunk($car, 2);
// print_r($chucked);
// echo "</pre>";
