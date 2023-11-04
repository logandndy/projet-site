<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "projetgarage";
$conn = new mysqli($hostName, $userName, $password, $databaseName);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération de l'ID de l'avis à partir de l'URL
$id = $_GET['id'];

// Récupération de l'avis à partir de la base de données
$query = "SELECT * FROM avis WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

// Stocker l'avis dans la session
session_start();
$_SESSION['avis'] = $data;

// Stocker l'avis dans une autre variable de session
$_SESSION['avis_visible'] = $data;

// Ajout de l'avis à la page site.php
header('Location: site.php');
exit();
?>

