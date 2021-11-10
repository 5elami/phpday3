
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <hr>
    <h4>Exercise 4</h4>
    <hr>
    <p>
    Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".</p>
    <p>
    <hr>
    <h4>SOLUTION</h4>
    <hr>

    <?php

    for ( $i=1; $i<100; $i++)
    {
        $output = $i;
        if (($i % 3 == 0) && ($i % 5 == !0)) {
            $output = "Back-end";
        }
        if (($i % 5 == 0) && ($i % 3 == !0)) {
            $output = "Front-end";
        }
        if (($i % 3 == 0) && ($i % 5 == 0)) {
            $output = "Full-stack";
        }

        echo $output . "</br>";
    }

    ?>

</body>

</html>