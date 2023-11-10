<?php
// Connexion à la base de données
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

// Requête pour supprimer l'avis
$sql = "DELETE FROM avis WHERE id=$id";

// Exécution de la requête
if ($conn->query($sql) === TRUE) {
    header('Location: site_employe.php');
} else {
 echo "Error deleting record: " . $conn->error;
}

// Fermeture de la connexion
$conn->close();
?>
<?php
$host='localhost';
$username='root';
$password='';
$dbname = "projetgarage";
$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
{
    die('Could not Connect MySql Server:' .mysql_error());
}

$id = $_GET['id'];

// Supprime la voiture
$query = "DELETE FROM voitures WHERE id = $id";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Error executing query: ' . mysqli_error($conn));
}

// Supprime l'image correspondante
$query2 = "DELETE FROM images WHERE id = $id";
$result2 = mysqli_query($conn, $query2);
if (!$result2) {
    die('Error executing query: ' . mysqli_error($conn));
}

header('Location: boutique_employee.php');

?>
