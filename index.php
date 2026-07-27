<?php
echo "My name is Nikita. <br> 
My favourite programming language is python because it is easy to learn and has simple syntax.";
// this is a comment
/* this is a multi-line 
comment */

//a script that calculates the sum of two numbers
$num1 = 10;
$num2 = 20;
$sum = $num1 + $num2;

echo "<br>The sum of {$num1} and {$num2} is {$sum}.";

// Format the output as "Today is [Day], [Month] [Date], [Year]."
$currentDate = date("l, F j, Y");
echo "<br>Current date: {$currentDate}";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Welcome to PHP Programming</h1>

  <?php
  $lucky_number = rand(1, 100); 
echo "<br>Your lucky number today is: <strong>$lucky_number</strong>";
  ?>
</body>
</html>
