<?php>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Arcadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer ></script>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class="container"style="margin: 0 auto;" >
    <?php include 'header.php'; ?>

    <main>
        <section class="presentation">
            <h1>Bienvenue au Zoo Arcadia</h1>
            <p>Arcadia est un zoo situé en France près de la forêt de Brocéliande, en Bretagne depuis 1960. Nous sommes fiers de vous présenter notre incroyable collection d'animaux provenant de différents habitats.</p>
            <p>Venez découvrir notre zoo et plongez dans un monde fascinant rempli de diversité et de beauté naturelle. Nous sommes impatients de vous accueillir au Zoo Arcadia.</p>
        </section>

    <div class="container" style="margin: 0 auto;">
    
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin: 0 auto;">
      
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>
      
      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/photo1.jpg" alt="zoo 1">
        </div>
        <div class="carousel-item">
          <img src="Images/photo2.jpg" alt="zoo 2">
        </div>
        <div class="carousel-item">
          <img src="Images/photo3.jpg" alt="zoo 3">
        </div>
      </div>
      
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    </div>

         

        

         <div class="habitat">
                <h2>Découvrez nos habitats</h2>
                <ul>

                    <li><a href="savane.php">Savane</a></li>
                    <img src="Images/savane.jpg" alt="Savane" style="width: 50%;">

                    <li><a href="jungle.php">Jungle</a></li>
                    <img src="Images/jungle.png" alt="Jungle"style="width: 50%;">
                    <li><a href="marais.php">Marais</a></li>
                    <img src="Images/marais.jpg" alt="Marais"style="width: 50%;">

                </ul>
            </div>
    </main>

    <h3>Ajouter un avis en cliquant <a href="avis.php">ici</a></h3>

    <h1>Liste des avis</h1>

    <footer class="footer">
        <?php include 'footer.php'?>
    </footer>
</body>
</html>
