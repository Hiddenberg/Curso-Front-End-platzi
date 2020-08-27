<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Carrousel</title>
   <link rel="stylesheet" href="carrouse-style.css">
</head>
<body>
   <section class="carousel">
      <div class="carousel__container">
         <div class='carousel-item'>
            <!-- <img class='carousel-item-img' src='./carousel-img/$image'> -->
            <div class="carousel-item__details">
               <div>
                  <img class='details-icon' src='./images/play.svg' alt='play'>
                  <img class='details-icon' src='./images/add.svg' alt='add'>
               </div>
               <p class="carousel-item__details--title">Titulo descriptivo</p>
               <p class="carousel-item__details--subtitle">2019 16+ 114 minutos</p>
            </div>
         </div>
         <?php
         $images = scandir("./carousel-img");
         shuffle($images);
         foreach ($images as $image) {
            if ($image != "." and $image != "..") {
               echo "
                  <div class='carousel-item'>
                  <img class='carousel-item-img' src='./carousel-img/$image'>
                  </div>
                  ";
            }
         }
         ?>
      </div>
   </section>
</body>
</html>