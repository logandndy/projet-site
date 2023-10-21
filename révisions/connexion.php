<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion Admin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="/photo/Capture d'écran 2023-07-18 104210.png" alt="logo">
    </div>
    <nav>
      <div>
        <a href="./site.html">Retour</a>
      </div>
    </nav>
    <main class="mainConnexion">
        <div class="divConnexion">
            <div class="titreConnexion">
                <h1>Connexion Admin</h1>
            </div>
            <div class="formConnexion">
                <form method="POST">
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" id="username" name="email" placeholder="Nom d'utilisateur">
                
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="mot_de_passe" placeholder="Mot de passe">
                
                    <button type="submit" name="connexion">Se connecter</button>
                </form>
            </div>
        </div>
        
        <?php
try {
  $mysqlConnection = new PDO("mysql:host=localhost;dbname=garage_v_parrot", 'root', 'Frimous09000!');
} catch(PDOException $a) {
  echo "Erreur : " . $a->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"];
  $mdp = $_POST["mot_de_passe"];
  
  $sql = "SELECT type_utilisateur FROM utilisateurs WHERE email=:email AND mot_de_passe=:mdp";
  
  $stmt = $mysqlConnection->prepare($sql);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":mdp", $mdp);
  $stmt->execute();
  
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if ($result) {
    if ($result["type_utilisateur"] === "administrateur") {
      $message = "Bienvenue Mr Parrot !";
      header("Location: ./site_admin.php");
      
    } else {
      $message = "Bienvenue !";
      $redirectUrl = "./Boutique.html";
    }
  } else {
    $message = "Identifiants incorrects.";
    $redirectUrl = "page_connexion.html"; // Rediriger vers la page de connexion en cas d'échec
  }
}

if (isset($message)) { ?>
  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <p><?php echo $message; ?></p>
    </div>
  </div>
  <script>
    function closeModal() {
      document.getElementById("modal").style.display = "none";
    }
    document.addEventListener("DOMContentLoaded", function () {
      document.getElementById("modal").style.display = "flex";
      <?php if (isset($redirectUrl)) { ?>
        setTimeout(function () {
          window.location.href = "<?php echo $redirectUrl; ?>";
        }, 3000); // Rediriger après 3 secondes
      <?php } ?>
    });
  </script>
<?php }
?>


        
    </main>
    <script src="script.js"></script>
</body>
</html>
