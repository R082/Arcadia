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
<body class="container">
    <?php include 'header.php'; ?>

    <main>
        <section class="presentation">
            <h1>Bienvenue au Zoo Arcadia</h1>
            <p>Arcadia est un zoo situé en France près de la forêt de Brocéliande, en Bretagne depuis 1960. Nous sommes fiers de vous présenter notre incroyable collection d'animaux provenant de différents habitats.</p>
            <p>Venez découvrir notre zoo et plongez dans un monde fascinant rempli de diversité et de beauté naturelle. Nous sommes impatients de vous accueillir au Zoo Arcadia.</p>
        </section>

        <section class="carousel">
            <h2>Explorez notre zoo en images</h2>
            <div class="carousel-container">
                <div class="slide">
                    <img src="Images/photo1.jpg" alt="Photo 1">
                </div>
                <div class="slide">
                    <img src="Images/photo2.jpg" alt="Photo 2">
                </div>
                <div class="slide">
                    <img src="Images/photo3.jpg" alt="Photo 3">
                </div>
            </div>
            
        </section>
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
