<?php>
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.bundle.min.js" defer></script>
        <title>Arcadia</title>
</head>
<body>

<footer class=" text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5>Horaires d'ouverture</h5>
                <p>Lundi à vendredi: 11h -17h </p>
                <p>Samedi et dimanche:10h-18h</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>&copy; Arcadia<br><span id="currentYear"></span>.<br> tous droits réservés.</p>
            </div>
        </div>
        <script>
    const currentYear = new Date().getFullYear();
    document.getElementById("currentYear").textContent = currentYear;
        </script>
    </div>
</footer>
