<?php
do {
    echo "============================<br>";
    echo "      Simple Calculator      <br>";
    echo "============================<br>";
    echo "1. Addition<br>";
    echo "2. Subtraction<br>";
    echo "3. Multiplication<br>";
    echo "4. Division<br>";
    echo "5. Exit<br>";
    echo "============================<br>";

    // For demo purpose, we manually assign the choice.
    // In real case, you can use readline() in CLI or $_POST in web form.
    $choice = rand(1, 5); // Simulate random user choice

    echo "Your choice: $choice<br>";

    if ($choice >= 1 && $choice <= 4) {
        $a = rand(1, 20);
        $b = rand(1, 20);

        echo "Numbers: $a and $b<br>";

        switch ($choice) {
            case 1:
                echo "Addition: " . ($a + $b) . "<br>";
                break;
            case 2:
                echo "Subtraction: " . ($a - $b) . "<br>";
                break;
            case 3:
                echo "Multiplication: " . ($a * $b) . "<br>";
                break;
            case 4:
                if ($b != 0) {
                    echo "Division: " . ($a / $b) . "<br>";
                } else {
                    echo "Error: Division by zero!<br>";
                }
                break;
        }
    } elseif ($choice == 5) {
        echo "Exiting program...<br>";
    } else {
        echo "Invalid choice! Try again.<br>";
    }

    echo "<hr>";
} while ($choice != 5);

echo "Program ended.<br>";
