<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <h4>Exercise 1</h4>
    <hr>
    <p>Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop.</p>
    <hr>

    <p> For Loop </p>
    <hr>

    <?php

    for ($i = 1; $i <= 50; $i++)
    echo "<p>$i . Laura Moldovan, Selamet Prizreni, Kefaet Prizreni & Hikmet Prizreni.</p>";
    ?>

    <hr>
    <p>While Loop</p>
    <hr>
    <?php
    $i = 1;

    while ($i <= 50)
    {
        echo "<p>$i . Laura Moldovan, Selamet Prizreni, Kefaet Prizreni & Hikmet Prizreni.</p>";
        $i ++;
    }

    ?>
<hr>
<p> Do While </p>
<hr>

        <?php
    $i = 1;

    do
    {
        echo "<p>$i . Laura Moldovan, Selamet Prizreni, Kefaet Prizreni & Hikmet Prizreni.</p>";
        $i ++;
    }
    while ($i <= 50);
    ?>
    
</body>

</html>