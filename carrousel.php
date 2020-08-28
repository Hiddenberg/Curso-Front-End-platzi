<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Carrousel</title>
   <link rel="stylesheet" href="./carrouse-style.css">
</head>
<body>
   <form action="/test" method="get">
      <label for="mImages">Images to show (min 5, max 100)</label>
      <input type="number" min="5" max="100" name="nImages" id="nImages">
      <input type="submit" value="show">
   </form>
   <section class="carousel">
      <div class="carousel__container">
         <?php
         $nImages = ($_GET['nImages']) ? $_GET['nImages'] : 5;
         $images = scandir("./carousel-img");
         shuffle($images);
         for ($i=0; $i < $nImages; $i++) { 
            $image = $images[array_rand($images)];
            if ($image != "." and $image != "..") {
               echo "
                  <div class='carousel-item'>
                  <img class='carousel-item-img' src='./carousel-img/$image'>
                  <div class='carousel-item__details'>
                     <div>
                        <img class='details-icon' src='./images/play.svg' alt='play'>
                        <img class='details-icon' src='./images/add.svg' alt='add'>
                     </div>
                     <p class='carousel-item__details--title'>Titulo descriptivo</p>
                     <p class='carousel-item__details--subtitle'>2019 16+ 114 minutos</p>
                  </div>
                  </div>
                  ";
            }
         }
         ?>
      </div>
   </section>
</body>
</html>