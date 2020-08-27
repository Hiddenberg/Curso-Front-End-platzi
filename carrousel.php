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
         <?php
         $images = scandir("./carousel-img");
         shuffle($images);
         foreach ($images as $image) {
            if ($image != "." and $image != "..") {
               echo "
                  <div class='carousel-item'>
                  <img class='carousel-item-img' src='./carousel-img/$image'>;
                  </div>
                  ";
            }
         }
         ?>
      </div>
   </section>
</body>
</html>