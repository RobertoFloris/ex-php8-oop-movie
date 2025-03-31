<?php 
require_once "./Traits/HasRating.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

require_once "./Db/db.php";

$movies[0]->setRating("5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>
      Classi in PHP
    </h1>

    <?php foreach($movies as $movie) { ?>
    <div class="card mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $movie->getTitle() ?></h5>
        <p class="card-text"><?php echo $movie->getAuthor() ?></p>
        <p class="card-text"><?php echo $movie->getYearPublication() ?></p>
        <p class="card-text"><?php echo $movie->getDescription() ?></p>
        <p class="card-text"><?php echo $movie->getGenreName() ?></p>
        <?php if ($movie->getRating() !== null) { ?>
          <p class="card-text"><?php echo $movie->getRating() ?></p>
        <?php } ?>
      </div>
    </div>
    <?php } ?>

  </div>
  
</body>
</html>