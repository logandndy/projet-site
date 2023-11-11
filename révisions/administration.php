<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Garage V.Parrot</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="logo">
     <a href="./site_super.php"><img src="/photo/Capture d'écran 2023-07-18 104210.png" alt="logo"></a> 
    </div>
    <nav>
      <ul>
      <?php
   session_start();
   if (isset($_SESSION["utilisateur"])) {
   ?>
     <form method="post" action="logout.php">
       <input type="submit" value="Déconnexion">
     </form>
   <?php
   }
   ?>
        <li><a href="./Boutique_super.php">Boutique</a></li>
          <li><a href="./service_super.php">Service</a></li>
          <li><a href="./Contact_super.php">Contact</a></li>
          <li><a href="./adminside_super.php">Administration</a></li>
      </ul>
    </nav>
    <main>
    <div class="contactezNous">
   <h2>Administration</h2>
   
   <?php
if (isset($_POST['add_user'])) {
   $email = $_POST['email'];
   $password = $_POST['mot_de_passe'];
   $type_utilisateur = 'employe';
   $host = 'localhost';
   $db = 'projetgarage';
   $user = 'root';
   $pass = '';
   $charset = 'utf8mb4';

   $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
   $opt = [
     PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     PDO::ATTR_EMULATE_PREPARES => false,
   ];
   $pdo = new PDO($dsn, $user, $pass, $opt);

   $stmt = $pdo->prepare('INSERT INTO utilisateurs (email, mot_de_passe, type_utilisateur) VALUES (?, ?, ?)');
   $stmt->execute([$email, $password, $type_utilisateur]);
}
?>


   <h3>Ajouter un employé</h3>
   <form method="post">
       <label for="email">email:</label><br>
       <input type="text" id="email" name="email"><br>
       <label for="mot_de_passe">Mot de passe:</label><br>
       <input type="password" id="mot_de_passe" name="mot_de_passe"><br>
       <input type="submit" name="add_user" value="Ajouter un employé">
   </form>

   <h3>Supprimer un employé</h3>
   <?php
$host = 'localhost';
$db = 'projetgarage';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
  PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

if (isset($_GET['delete_user'])) {
   $email = $_GET['delete_user'];
   $stmt = $pdo->prepare('DELETE FROM utilisateurs WHERE email = ?');
   $stmt->execute([$email]);
}

$stmt = $pdo->query('SELECT email FROM utilisateurs WHERE type_utilisateur = "employe"');
while ($row = $stmt->fetch()) {
    echo '<a href="adminside.php?delete_user=' . $row['email'] . '">' . $row['email'] . '</a><br>';
}
?>


</div>

        
        
    </main>
    <footer>
      <div class="contact">
        <p>Contact :</p>
        <ul>
          <li><a href="Garage.parrot@gmail.com">Garage.parrot@gmail.com</a></li>
          <li>tél : 06 06 06 06 06</li>
        </ul>
      </div>
      <div>
     <?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=projetgarage", 'root', '');
} catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
}

$sql = 'SELECT jour_semaine, heure_matin, heure_matin2, heure_aprem, heure_aprem2 FROM horaires ORDER BY FIELD(jour_semaine, "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche")';
$stmt = $pdo->query($sql);

// Vérifiez si la requête a réussi
if ($stmt) {
  // Récupérez les données et affichez-les (ou utilisez-les comme nécessaire)
  echo "<p>Horaire d'ouverture : <br>";
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $jour_semaine = $row['jour_semaine'];
      $heure_matin = $row['heure_matin'];
      $heure_matin2 = $row['heure_matin2'];
      $heure_aprem = $row['heure_aprem'];
      $heure_aprem2 = $row['heure_aprem2'];

      // Afficher les données
      echo $jour_semaine . " : " . $heure_matin . " - " . $heure_matin2 . " / " . $heure_aprem . " - " . $heure_aprem2 . "<br>";

     
  }
  echo "</p>";
} else {
  echo "Erreur lors de la récupération des données.";
}

?>


      </div>
    </footer>
  </header>
</body>
</html>