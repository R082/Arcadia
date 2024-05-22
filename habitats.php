<!DOCTYPE html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
<title>Zoo Arcadia</title>
<html>
<head>
    <title>Habitats</title><br>
</head>
<body class="container">
    <header>
        <?php include 'header.php'?>
    </header>
    <main>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                <img src="Images/savane.jpg" alt="Savane" style="width: 50%;">
                    <div class="card-body">
                        <h5 class="card-title">Habitat de la savane</h5>
                        <p class="card-text">La savane est un habitat caractérisé par de vastes plaines herbeuses et des arbres dispersés. La savane offre un paysage spectaculaire et une biodiversité unique. Découvrez cet habitat fascinant et observez de près la vie sauvage qui s'y épanouit.</p>
                        
                        <a href="savane_list.html" class="btn btn-success">En savoir +</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <img src="Images/jungle.png" alt="Jungle"style="width: 50%;">
                    <div class="card-body">
                        <h5 class="card-title">Habitat de la jungle</h5>
                        <p class="card-text">La jungle est un habitat dense et luxuriant, rempli de végétation tropicale et d'une grande diversité d'animaux. C'est un écosystème fascinant où la vie sauvage prospère.</p>
                        
                        <a href="jungle_list.html" class="btn btn-success">En savoir +</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <img src="Images/marais.jpg" alt="Marais"style="width: 50%;">
                    <div class="card-body">
                        <h5 class="card-title">Habitat des marais</h5>
                        <p class="card-text">Les marais sont un habitat humide et marécageux, abritant une grande variété de plantes et d'animaux aquatiques. C'est un écosystème unique où vous pouvez observer des oiseaux migrateurs, des poissons, des reptiles et bien d'autres espèces. Explorez la beauté tranquille des marais et découvrez la richesse de la vie sauvage qui s'y trouve.</p>
                        
                        <a href="marais_list.html" class="btn btn-success">En savoir +</a>
                    </div>
                </div>
            </div>
            
        
        </div>
            
            
    </main>
    <footer>
        <?php include 'footer.php'?>
    </footer>
</body>


</html>