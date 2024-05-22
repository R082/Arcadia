<?php>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer ></script>
    <title>Soumettre un Avis</title>
</head>
<body>
    <div class="container">
    <h1>Soumettre un Avis</h1>
    <form action="soumettre_avis.php" method="post">
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" required><br><br>
        <label for="note">Note :</label>
        <input type="number" id="note" name="note" min="1" max="5" required><br><br>
        <button type="submit">Soumettre</button>
    </form>
    </div>

</body>
</html>