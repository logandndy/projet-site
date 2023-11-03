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

// Récupérer l'ID de l'avis à supprimer
$id = $_POST['id'];

// Préparer une requête SQL
$sql = "DELETE FROM avis WHERE id=$id";

// Exécuter la requête
if ($conn->query($sql) === TRUE) {
 echo "Avis supprimé avec succès";
} else {
 echo "Erreur: " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
