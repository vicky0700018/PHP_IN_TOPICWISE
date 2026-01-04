 <?php

echo "<h1>========== PHP LOOPS PRACTICE ==========</h1>";

// ================================================================
// 1️⃣ WHILE LOOP - Entry Control Loop
// ================================================================
echo "<h2>1. WHILE LOOP</h2>";

echo "<h3>Example 1: Simple Counter</h3>";
$i = 1;
while ($i <= 5) {
    echo "Count: $i <br>";
    $i++;
}

echo "<h3>Example 2: Multiplication Table</h3>";
$num = 2;
$i = 1;
while ($i <= 10) {
    echo $num . " x " . $i . " = " . ($i * $num) . "<br>";
    $i++;
}

echo "<h3>Example 3: Print Even Numbers</h3>";
$i = 0;
while ($i <= 20) {
    echo "Even: $i <br>";
    $i += 2;
}

echo "<h3>Example 4: Print Table of 7</h3>";
$i = 1;
while ($i <= 10) {
    echo "7 x $i = " . (7 * $i) . "<br>";
    $i++;
}


// ================================================================
// 2️⃣ DO-WHILE LOOP - Exit Control Loop
// ================================================================
// echo "<hr><h2>2. DO-WHILE LOOP</h2>";

// echo "<h3>Example 1: Simple Counter (runs at least once)</h3>";
// $i = 1;
// do {
//     echo "Do-While Count: $i <br>";
//     $i++;
// } while ($i <= 5);

// echo "<h3>Example 2: Print Hello 3 times</h3>";
// $count = 1;
// do {
//     echo "Hello $count <br>";
//     $count++;
// } while ($count <= 3);

// echo "<h3>Example 3: Countdown from 5</h3>";
// $i = 5;
// do {
//     echo "Countdown: $i <br>";
//     $i--;
// } while ($i > 0);

// echo "<h3>Example 4: Table of 5 using Do-While</h3>";
// $i = 1;
// do {
//     echo "5 x $i = " . (5 * $i) . "<br>";
//     $i++;
// } while ($i <= 10);

// echo "<h3>Example 5: Runs Even When Condition is False</h3>";
// $i = 10;
// do {
//     echo "This prints once even if condition is false: $i <br>";
//     $i++;
// } while ($i < 5);  // FALSE, but code ran once!


// ================================================================
// 3️⃣ FOR LOOP - Most Common Loop
// ================================================================
// echo "<hr><h2>3. FOR LOOP</h2>";

// echo "<h3>Example 1: Simple Counting (0-9)</h3>";
// for ($i = 0; $i < 10; $i++) {
//     echo "Number: $i <br>";
// }

// echo "<h3>Example 2: Table of 3</h3>";
// for ($i = 1; $i <= 10; $i++) {
//     echo "3 x $i = " . (3 * $i) . "<br>";
// }

// echo "<h3>Example 3: Backward Counting (10-1)</h3>";
// for ($i = 10; $i >= 1; $i--) {
//     echo "Backward: $i <br>";
// }

// echo "<h3>Example 4: Even Numbers (2-20)</h3>";
// for ($i = 2; $i <= 20; $i += 2) {
//     echo "Even: $i <br>";
// }

// echo "<h3>Example 5: Odd Numbers (1-19)</h3>";
// for ($i = 1; $i < 20; $i += 2) {
//     echo "Odd: $i <br>";
// }

// echo "<h3>Example 6: Loop Through Array with Index</h3>";
// $fruits = ["Apple", "Banana", "Cherry", "Mango", "Orange"];
// for ($i = 0; $i < count($fruits); $i++) {
//     echo "Index $i: " . $fruits[$i] . "<br>";
// }

// echo "<h3>Example 7: Sum of Numbers (1-10)</h3>";
// $sum = 0;
// for ($i = 1; $i <= 10; $i++) {
//     $sum += $i;
// }
// echo "Sum of 1 to 10: $sum <br>";

// echo "<h3>Example 8: Print Square of Numbers</h3>";
// for ($i = 1; $i <= 5; $i++) {
//     echo "Square of $i is: " . ($i * $i) . "<br>";
// }


// ================================================================
// 4️⃣ FOREACH LOOP - Best for Arrays
// ================================================================
// echo "<hr><h2>4. FOREACH LOOP</h2>";

// echo "<h3>Example 1: Simple Array</h3>";
// $colors = ["Red", "Green", "Blue", "Yellow"];
// foreach ($colors as $color) {
//     echo "Color: $color <br>";
// }

// echo "<h3>Example 2: Associative Array (Key => Value)</h3>";
// $person = [
//     "name" => "Vicky Kumar",
//     "age" => 22,
//     "city" => "Delhi",
//     "country" => "India"
// ];
// foreach ($person as $key => $value) {
//     echo "$key: $value <br>";
// }

// echo "<h3>Example 3: Course Fees</h3>";
// $courses = [
//     "HTML" => 2500,
//     "CSS" => 2500,
//     "JavaScript" => 3000,
//     "PHP" => 4000,
//     "Laravel" => 8000
// ];
// foreach ($courses as $course => $fee) {
//     echo "$course costs Rs. $fee <br>";
// }

// echo "<h3>Example 4: Array of Numbers</h3>";
// $numbers = [10, 20, 30, 40, 50];
// foreach ($numbers as $num) {
//     echo "Number: $num <br>";
// }

// echo "<h3>Example 5: 2D Array (Multiple Students)</h3>";
// $students = [
//     ["name" => "Rohan", "age" => 20, "marks" => 85],
//     ["name" => "Riya", "age" => 21, "marks" => 90],
//     ["name" => "Amit", "age" => 19, "marks" => 78],
//     ["name" => "Priya", "age" => 21, "marks" => 95]
// ];
// foreach ($students as $student) {
//     echo "Name: " . $student["name"] . " | Age: " . $student["age"] . " | Marks: " . $student["marks"] . "<br>";
// }

// echo "<h3>Example 6: Key and Value Both (Products)</h3>";
// $products = [
//     "Laptop" => 50000,
//     "Mouse" => 500,
//     "Keyboard" => 1500,
//     "Monitor" => 15000
// ];
// foreach ($products as $item => $price) {
//     echo "$item - Rs. $price <br>";
// }

// echo "<h3>Example 7: Months List</h3>";
// $months = ["January", "February", "March", "April", "May", "June", 
//            "July", "August", "September", "October", "November", "December"];
// foreach ($months as $month) {
//     echo "$month <br>";
// }


// ================================================================
// 🔥 MIXED PRACTICE - COMPLEX EXAMPLES
// ================================================================
// echo "<hr><h2>MIXED PRACTICE - Complex Examples</h2>";

// echo "<h3>Example 1: Print Numbers with Conditions</h3>";
// for ($i = 1; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
//         echo "$i is Even <br>";
//     } else {
//         echo "$i is Odd <br>";
//     }
// }

// echo "<h3>Example 2: Multiplication Table (1-12)</h3>";
// echo "<table border='1'>";
// for ($num = 1; $num <= 5; $num++) {
//     echo "<tr>";
//     for ($i = 1; $i <= 10; $i++) {
//         echo "<td>" . ($num * $i) . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

// echo "<h3>Example 3: Count Total Marks and Average</h3>";
// $marks = [85, 90, 78, 95, 88];
// $total = 0;
// foreach ($marks as $mark) {
//     $total += $mark;
// }
// $average = $total / count($marks);
// echo "Total Marks: $total <br>";
// echo "Average: $average <br>";

// echo "<h3>Example 4: Find Maximum and Minimum in Array</h3>";
// $scores = [45, 78, 23, 98, 56, 34, 87];
// $max = max($scores);
// $min = min($scores);
// echo "Highest Score: $max <br>";
// echo "Lowest Score: $min <br>";
// foreach ($scores as $score) {
//     echo "Score: $score <br>";
// }

// echo "<h3>Example 5: Search in Array</h3>";
// $cities = ["Delhi", "Mumbai", "Bangalore", "Chennai", "Kolkata"];
// $search = "Bangalore";
// foreach ($cities as $city) {
//     if ($city == $search) {
//         echo "✓ Found: $city <br>";
//         break;
//     }
// }

// echo "<h3>Example 6: Count and Display</h3>";
// $items = ["Apple", "Mango", "Banana", "Orange", "Grapes"];
// echo "Total Items: " . count($items) . "<br>";
// foreach ($items as $index => $item) {
//     echo ($index + 1) . ". $item <br>";
// }

// echo "<h3>Example 7: Grade Based on Marks</h3>";
// $student_marks = [
//     "Rohan" => 85,
//     "Riya" => 90,
//     "Amit" => 78,
//     "Priya" => 95,
//     "Sanjay" => 65
// ];
// foreach ($student_marks as $name => $marks) {
//     if ($marks >= 90) {
//         $grade = "A+";
//     } elseif ($marks >= 80) {
//         $grade = "A";
//     } elseif ($marks >= 70) {
//         $grade = "B";
//     } else {
//         $grade = "C";
//     }
//     echo "$name: $marks -> Grade: $grade <br>";
// }

// echo "<h3>Example 8: Display Items with Price Calculation</h3>";
// $cart = [
//     "Laptop" => ["price" => 50000, "qty" => 1],
//     "Mouse" => ["price" => 500, "qty" => 2],
//     "Keyboard" => ["price" => 1500, "qty" => 1]
// ];
// $total_price = 0;
// foreach ($cart as $product => $details) {
//     $subtotal = $details["price"] * $details["qty"];
//     $total_price += $subtotal;
//     echo "$product: Rs. " . $details["price"] . " x " . $details["qty"] . " = Rs. $subtotal <br>";
// }
// echo "<strong>Total: Rs. $total_price</strong> <br>";

// echo "<h3>Example 9: Star Pattern</h3>";
// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }

// echo "<h3>Example 10: Number Pattern</h3>";
// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo $j . " ";
//     }
//     echo "<br>";
// }

// echo "<hr><h2>========== END OF PRACTICE ==========</h2>";

// 