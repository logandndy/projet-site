<?php
$host='localhost';
$username='root';
$password='';
$dbname = "projetgarage";
$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
{
    die('Could not Connect MySql Server:' .mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $minPrice = $_POST['minPrice'];
    $maxPrice = $_POST['maxPrice'];
    $minYear = $_POST['minYear'];
    $maxKm = $_POST['maxKm'];

    // Utilisez ces critères pour filtrer les voitures dans la base de données
    $sql = "SELECT * FROM voitures WHERE prix BETWEEN $minPrice AND $maxPrice AND mise_circulation >= $minYear AND km <= $maxKm";

    // Exécutez la requête SQL
    $result = mysqli_query($conn, $sql);

    // Vérifiez si la requête a réussi
    if ($result) {
        // Si la requête a réussi, récupérez les résultats et renvoyez-les au client
        $cars = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($cars);
    } else {
        // Si la requête a échoué, renvoyez un message d'erreur
        echo json_encode(array('error' => 'La requête SQL a échoué : ' . mysqli_error($conn)));
    }
}

?>
