<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculate Factorial">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        $factorial = 1;

        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        echo "<h3>Factorial of $number is: $factorial</h3>";
    }
    ?>
</body>
</html>
