<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="./carousel-style.css">
   <link rel="stylesheet" href="./login-style.css">
</head>
<body>
   <header class="header">
      <img class="header__img" src="images\logo-platzi.png" alt="">
      <div class="header__menu">
         <div class="header__menu--profile">
            <img src="images\profile-user.svg" alt="user icon">
            <p>Perfil</p>
         </div>
         <ul>
            <li><a href="/">Cuenta</a></li>
            <li><a href="/">Cerrar sesion</a></li>
         </ul>
      </div>
      
   </header>



   <section class="main-wrapper">
      <section class="search">
         <h2 class="search__title">¿Que quieres ver hoy?</h2>
         <input class="input" type="text" placeholder="Buscar...">
      </section>

      <h2 class="categories__title">Mi lista</h2>
      <form action="/maquetacion-principal.php" method="get">
         <label for="mImages">Images to show (min 5, max 100)</label>
         <input type="number" min="5" max="100" name="nImages" id="nImages">
         <input type="submit" value="show">
      </form>
      <section class="carousel">
         <div class="carousel__container">
            <?php
            $nImages = ($_GET['nImages'] != null) ? $_GET['nImages'] : 5;
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
   </section>


   <footer class="footer">
      <a href="/">Terms of use</a>
      <a href="/">Privacy info</a>
      <a href="/">Help center</a>
   </footer>
</body>
</html>