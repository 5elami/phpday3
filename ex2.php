<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>

<body>
    <hr>
<h4>Exercise 2</h4>
<hr>
<p>Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.</p>
<hr>
<h4>SOLUTION</h4>

<?php 

$a = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];

foreach ($a as $i)
    echo "<p>The value is $i.</p>"

?>

</body>
</html>