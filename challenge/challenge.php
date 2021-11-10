<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- 
Display all meals

Add a meal

Delete a meal -->
<header class="bg-info p-3 text-center">
    <h1> Restaurant "La Shike" </h1>
</header>
<?php include 'conection.php';?>


    
        <?php 
echo '<div class="container p-5">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">';
            foreach ($rows as $value) {
                echo "<div class='col'>
                        <div class='card meal m-1' style='width: 16rem;'>
                            <img src='". $value["img"] . "'  class='card-img-top' alt='". $value["Dname"] ."'>
                            <div class='card-body'>
                                <h5 class='card-title'>". $value["Dname"] . "</h5>
                                <p class='card-text'>". $value["meal_desc"] . "</p>
                            <div class='card-footer'<p class='btn btn-primary'>". $value["price"] . "</a></div>
                            </div>
                        </div>
                    </div>";
                };

            echo "    </div>
            </div>"
        ?>
<footer class="bg-info p-3 text-center">
    <p> Made by "Opre Roma" </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>