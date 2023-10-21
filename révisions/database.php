<?php
$servername = "localhost";
$username = "root";
$password = "Frimous09000!";
$dbname = "garage_v_parrot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}


if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $commentaire = $_POST['commentaire'];
    $note = $_POST['note'];

    $sql = "INSERT INTO avis (nom, commentaire, note) VALUES (:nom, :commentaire, :note)";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':commentaire', $commentaire);
    $stmt->bindParam(':note', $note);
    
    try {
        $stmt->execute();
        echo "Avis ajouté avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout de l'avis : " . $e->getMessage();
    }
}

?>