<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <title>contact</title>
</head>
<body>
    <header>
        <?php include 'header.php'?>
    </header>
    <div class="container">
        <h2 class="p-5 text-center">Contactez-nous</h2>
        <p class="text-center">Une question, une suggestion ou un commentaire ? N'hésitez pas à nous contacter en remplissant le formulaire
            ci-dessous.</p>
        <form action="">
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="votreNom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="votreNom" placeholder="Votre nom (obligatoire)"
                        required>
                </div>
                <div class="col-12 mb-3">
                    <label for="votrePrenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="votrePrenom"
                        placeholder="Votre prénom (obligatoire)" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="votreEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="votreEmail"
                        placeholder="Votre adresse email (obligatoire)" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea class="form-control" id="message" rows="4"
                        placeholder="Votre message (facultatif)"></textarea>
                </div>
                <div class="col-12 mb-3">
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </div>
        </form>

    </div>

    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer class="footer">
    <?php include 'footer.php'?>
</footer>
</html>
