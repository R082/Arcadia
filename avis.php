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
<div class="container">

    <h1>Soummettre un avis</h1>
    <form action="soumettre_avis.php" method="post">
        <label for="pseudo">Pseudo: </label>
        <input type="text" name="pseudo" id="pseudo" required>
        <label for="note">Note: </label>
        <input type="number" name="note" id="note" min="0" max="5" required>
        <label for="avis">Avis: </label>
        <textarea name="avis" id="avis" required></textarea>
        <button type="submit">Envoyer</button>
    </form>

</div>
</body> 
