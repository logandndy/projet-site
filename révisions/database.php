<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetgarage";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

session_start();
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$commentaire = $_POST['commentaire'];
$note = $_POST['note'];

// Préparer une requête SQL
$sql = "INSERT INTO Avis (nom, commentaire, note) VALUES ('$nom', '$commentaire', '$note')";

if (isset($_SESSION['type_utilisateur'])) {
    echo "Le rôle de l'utilisateur est : " . $_SESSION['type_utilisateur'];
 } else {
    echo "Le rôle de l'utilisateur n'est pas défini";
 }
 
// Exécuter la requête
if ($conn->query($sql) === TRUE) {
    // Vérifier le rôle de l'utilisateur
    if (isset($_SESSION['type_utilisateur'])) {
       if ($_SESSION['type_utilisateur'] === 'admin') {
          // Rediriger vers la page admin
          header("Location: site_admin.php");
          echo "Redirection vers site_admin.php";
       } elseif ($_SESSION['type_utilisateur'] === 'employe') {
          // Rediriger vers la page employe
          header("Location: site_employe.php");
          echo "Redirection vers site_employe.php";
       } else {
          // Rediriger vers la page site
          header("Location: site.php");
          echo "Redirection vers site.php";
       }
    } else {
       // Rediriger vers la page site
       header("Location: site.php");
       echo "Redirection vers site.php";
    }
   } else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
   }
   

// Fermer la connexion
$conn->close();
?>

