<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>

<body>
    <hr>
    <h4>Exercise 3</h4>
    <hr>
    <p>
        Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP.</p>
    <hr>
    <h4>SOLUTION</h4>

    <?php
    $a = [rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20),];

    foreach ($a as $i)
    echo "<p>The value is $i.</p>";

    function highestValue($x)
    {
        $highest = 0;
        foreach( $x as $i) {
            if ($highest < $i) {
                $highest = $i;
            }
        }
        echo "The highest number of the array is: $highest .";
    }

    highestValue($a)
    ?>

</body>

</html>