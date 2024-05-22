<?php>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Arcadia</title>
</head>
<body>

    <header class="navbar navbar-expand-md navbar-light  px-3;"color: white; font-weight: bold;"background-image: url('Images/boardwalk-2775982_640.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;" >
        <a href="index.php" class="navbar-brand logo">
            <img src="Images/logo/singe.jpg" alt="Logo Zoo Arcadia" width="100" height="100">
            
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-content">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
            <nav>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>

                    <li class="nav-item"><a class="nav-link" href="habitats.php">Habitats</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contactez nous</a></li>
                </ul>
            </nav>
            
        </div>
        <button type="button" class="btn  ms-3" data-bs-toggle="offcanvas" data-bs-target="#userTools">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
        </button>
    </header>