
<?php>
<!DOCTYPE html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer ></script>
<title>Arcadia</title>
<html>
<head>
    <title>Zoo Arcadia</title>
</head>
<body class="container">
<?php include 'header.php'; ?>

<main>
    <section class="presentation">
        <h1>Bienvenue au Zoo Arcadia</h1>
        <p>Arcadia est un zoo situé en France près de la forêt de Brocéliande, en Bretagne depuis 1960. Nous sommes fiers de vous présenter notre incroyable collection d'animaux provenant de différents habitats.</p>
        <p>Venez découvrir notre zoo et plongez dans un monde fascinant rempli de diversité et de beauté naturelle. Nous sommes impatients de vous accueillir au Zoo Arcadia.</p>
    </section>

</div>

    <section class="carousel">
        <h2>Explorez notre zoo en images</h2>
        <div class="carousel-container">
            <div class="slide">
                <img src="photo1.jpg" alt="Photo 1">
            </div>
            <div class="slide">
                <img src="photo2.jpg" alt="Photo 2">
            </div>
            <div class="slide">
                <img src="photo3.jpg" alt="Photo 3">
            </div>
            <div class="slide">
                <img src="photo4.jpg" alt="Photo 4">
            </div>
        </div>
        <div class="habitat">
            <h2>Découvrez nos habitats</h2>
            <ul>
                <li><a href="savane.php">Savane</a></li>
                <li><a href="jungle.php">Jungle</a></li>
                <li><a href="marais.php">Marais</a></li>
            </ul>
        </div>
    </section>
</main>
    

</body>
<h1>Liste des avis</h2>
<h3>Ajouter un avis en cliquant </h3>
<?php include 'avis.php'; ?>

<footer class="footer">
    
    <?php include 'footer.php'?>
</footer>


</html>
</html>