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

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$commentaire = $_POST['commentaire'];
$note = $_POST['note'];

// Préparer une requête SQL
$sql = "INSERT INTO Avis (nom, commentaire, note) VALUES ('$nom', '$commentaire', '$note')";

// Exécuter la requête
if ($conn->query($sql) === TRUE) {
    // Récupérez le type d'utilisateur de la session
    $userType = $_SESSION['utilisateur'];

    // Redirigez en fonction du type d'utilisateur
    if($userType == 'admin'){
        header('Location: site_admin.php');
    } else if($userType == 'employe'){
        header('Location: site_employe.php');
    } else {
        // Ajoutez d'autres conditions pour d'autres types d'utilisateurs si nécessaire
        echo "Erreur: Type d'utilisateur non reconnu";
    }
} else {
 echo "Erreur: " . $sql . "<br>" . $conn->error;
}


// Fermer la connexion
$conn->close();
?>

