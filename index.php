<?php 
require_once "./Traits/HasRating.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

require_once "./Db/db.php";

$movies[0]->setRating("5");

var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>
      Classi in PHP
    </h1>

    <?php $Inception ?>

  </div>
  
</body>
</html>