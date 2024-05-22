<?<php>
    $serveurname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "avis_utilisateurs";
    $conn = new mysqli($serveurname, $username, $password, $dbname);

    // Création de la connexion
$cnx=  new PDO('mysql:host=localhost;dbname=avis_utilisateurs','root','');
// Préparation de la requête
$req = $cnx->prepare('INSERT INTO avis (pseudo, note, avis) VALUES (:pseudo, :note, :avis)');
// Exécution de la requête
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'note' => $_POST['note'],
    'avis' => $_POST['avis']
));
// Redirection vers la page d'accueil
header('Location: index.php');

