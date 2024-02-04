<?php
// Remplacez ces valeurs par vos propres informations de connexion
$host = 'localhost';
$db = 'id21587306_garagevparrot';
$user = 'id21587306_vparrot';
$pass = 'Frimous09000!';

// Créer une connexion
$conn = new mysqli($host, $user, $pass, $db);

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
   echo "New record created successfully";
  } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

// Fermer la connexion
$conn->close();
$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
?>

