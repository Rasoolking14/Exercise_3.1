<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><?php
// =============================================
// Module 2 – Server-Side Development
// PHP Exercises - Complete Solutions
// File: php_exercises.php
// =============================================

// TODO 1: Print name, favorite language, and reason
echo "========== TODO 1 ==========<br>";
echo "My name is John Doe. My favourite programming language is PHP because it is easy to use, has great community support, and is perfect for web development.<br><br>";

// TODO 2: Calculate and print sum of two numbers
echo "========== TODO 2 ==========<br>";
$num1 = 15;
$num2 = 25;
$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is: $sum<br><br>";

// TODO 3: Display today's date
echo "========== TODO 3 ==========<br>";
date_default_timezone_set('UTC');
echo "Today is " . date("l, F j, Y") . ".<br><br>";

// TODO 4: Embed PHP into HTML - Welcome page
echo "========== TODO 4 ==========<br>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h1><?php echo "Welcome to PHP Programming!"; ?></h1>
</body>
</html>

<?php
// TODO 5: Generate random number between 1-100
echo "<br>========== TODO 5 ==========<br>";
$random_number = rand(1, 100);
echo "Your lucky number today is: $random_number.<br>";
?>

