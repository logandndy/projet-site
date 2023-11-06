<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Boutique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
          <a href="./site.php"><img src="/photo/Capture d'écran 2023-07-18 104210.png" alt="logo"></a>
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
            <li><a href="./Boutique.php">Boutique</a></li>
            <li><a href="./service.php">Service</a></li>
            <li><a href="./Contact.php">Contact</a></li>
          </ul>
        </nav>
    </header>
        <main class="mainBoutique">
          <div class="neufoccas">
            <p>Véhicule neufs et Véhicule occasions</p>
          </div>
         
          <div class="Vente" style="display: flex; flex-direction: column; align-items: center; align-items:stretch;">
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

    $query = "SELECT * FROM voitures where id = 1";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM images where id = 1";
$result2 = mysqli_query($conn, $query2);

if (mysqli_num_rows($result) > 0) {
  $data = mysqli_fetch_assoc($result);
  $image = mysqli_fetch_assoc($result2);
?>
<div style="display: flex; align-items: center;justify-content: center;">
  <div>
    <img src="./upload/<?php echo $image['file']; ?>" alt="Image" width="300" height="250" style="border-radius: 50%;
  box-shadow: 0px 0px 10px 0px;">
  </div>
  <div style="margin-left: 20px;">
    <p>Etat : </p><p><?php echo $data['ETAT']; ?></p><br>
    <p>Nom : </p><p><?php echo $data['NOM']; ?></p><br>
    <p>Année : </p><p><?php echo $data['mise_circulation']; ?></p><br>
    <p>Kilométres :</p><p><?php echo $data['km']; ?></p><br>
    <p>Prix : </p><p><?php echo $data['prix']; ?></p>
  </div>
</div>
<?php
} else { ?>
  <p>No data found</p>
<?php } ?>
                    <div class="formulaire">
                        <form>
                          <div>
                            <label for="name">Nom :</label>
                            <input type="text" id="name" name="name" placeholder="Nom" required>
                          </div>
                          <div>
                            <label for="surname">Prénom :</label>
                            <input type="text" id="surname" name="surname" placeholder="Prénom" required>
                          </div>
                          <div>
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                          </div>
                          <div>
                            <label for="phone">Numéro de téléphone :</label>
                            <input type="tel" id="phone" name="phone" placeholder="Numéro de téléphone" required>
                          </div>
                          <div>
                            <label for="message">Message :</label>
                            <textarea style="width: 700px;height: 100px;" id="message" name="message" rows="4" placeholder="Saisissez votre commentaire" required>Bonjour, j'aimerais davantage de renseignement concernant cette Peugeot 3008</textarea>
                          </div>
                          <div>
                            <input type="submit" value="Envoyer">
                          </div>
                        </form>
                      </div>
                </div>
                <div class="Vente" style="display: flex; flex-direction: column; align-items: center; align-items:stretch;">
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

    $query = "SELECT * FROM voitures where id = 2";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM images where id = 2";
$result2 = mysqli_query($conn, $query2);

if (mysqli_num_rows($result) > 0) {
  $data = mysqli_fetch_assoc($result);
  $image = mysqli_fetch_assoc($result2);
?>
<div style="display: flex; align-items: center;justify-content: center;">
  <div>
  <img src="./upload/<?php echo $image['file']; ?>" alt="Image" width="300" height="250" style="border-radius: 50%;
  box-shadow: 0px 0px 10px 0px;">
  </div>
  <div style="margin-left: 20px;">
    <p>Etat : </p><p><?php echo $data['ETAT']; ?></p><br>
    <p>Nom : </p><p><?php echo $data['NOM']; ?></p><br>
    <p>Année : </p><p><?php echo $data['mise_circulation']; ?></p><br>
    <p>Kilométres :</p><p><?php echo $data['km']; ?></p><br>
    <p>Prix : </p><p><?php echo $data['prix']; ?></p>
  </div>
</div>
<?php
} else { ?>
  <p>No data found</p>
<?php } ?>
</div>
                <div class="formulaire">
                    <form>
                      <div>
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" placeholder="Nom" required>
                      </div>
                      <div>
                        <label for="surname">Prénom :</label>
                        <input type="text" id="surname" name="surname" placeholder="Prénom" required>
                      </div>
                      <div>
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                      </div>
                      <div>
                        <label for="phone">Numéro de téléphone :</label>
                        <input type="tel" id="phone" name="phone" placeholder="Numéro de téléphone" required>
                      </div>
                      <div>
                        <label for="message">Message :</label>
                        <textarea style="width: 700px;height: 100px;" id="message" name="message" rows="4" placeholder="Saisissez votre commentaire"  required>Bonjour, j'aimerais davantage de renseignement concernant cette OPEL MOKKA</textarea>
                      </div>
                      <div>
                        <input type="submit" value="Envoyer">
                      </div>
                    </form>
                  </div>
            </div>
            <div class="Vente" style="display: flex; flex-direction: column; align-items: center; align-items:stretch;">
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

    $query = "SELECT * FROM voitures where id = 3";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM images where id = 3";
$result2 = mysqli_query($conn, $query2);

if (mysqli_num_rows($result) > 0) {
  $data = mysqli_fetch_assoc($result);
  $image = mysqli_fetch_assoc($result2);
?>
<div style="display: flex; align-items: center;justify-content: center;">
  <div>
  <img src="./upload/<?php echo $image['file']; ?>" alt="Image" width="300" height="250" style="border-radius: 50%;
  box-shadow: 0px 0px 10px 0px;">
  </div>
  <div style="margin-left: 20px;">
    <p>Etat : </p><p><?php echo $data['ETAT']; ?></p><br>
    <p>Nom : </p><p><?php echo $data['NOM']; ?></p><br>
    <p>Année : </p><p><?php echo $data['mise_circulation']; ?></p><br>
    <p>Kilométres :</p><p><?php echo $data['km']; ?></p><br>
    <p>Prix : </p><p><?php echo $data['prix']; ?></p>
  </div>
</div>
<?php
} else { ?>
  <p>No data found</p>
<?php } ?>
</div>
                <div class="formulaire">
                    <form>
                      <div>
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" placeholder="Nom" required>
                      </div>
                      <div>
                        <label for="surname">Prénom :</label>
                        <input type="text" id="surname" name="surname" placeholder="Prénom" required>
                      </div>
                      <div>
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                      </div>
                      <div>
                        <label for="phone">Numéro de téléphone :</label>
                        <input type="tel" id="phone" name="phone" placeholder="Numéro de téléphone" required>
                      </div>
                      <div>
                        <label for="message">Message :</label>
                        <textarea style="width: 700px;height: 100px;" id="message" name="message" rows="4" placeholder="Saisissez votre commentaire" required>Bonjour, j'aimerais davantage de renseignement concernant cette Citroen C3</textarea>
                      </div>
                      <div>
                        <input type="submit" value="Envoyer">
                      </div>
                    </form>
                  </div>
                  <div class="Vente" style="display: flex; flex-direction: column; align-items: center; align-items:stretch;">
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

    $query = "SELECT * FROM voitures where id = 4";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM images where id = 4";
$result2 = mysqli_query($conn, $query2);

if (mysqli_num_rows($result) > 0) {
  $data = mysqli_fetch_assoc($result);
  $image = mysqli_fetch_assoc($result2);
?>
<div style="display: flex; align-items: center;justify-content: center;">
  <div>
  <img src="./upload/<?php echo $image['file']; ?>" alt="Image" width="300" height="250" style="border-radius: 50%;
  box-shadow: 0px 0px 10px 0px;">
  </div>
  <div style="margin-left: 20px;">
    <p>Etat : </p><p><?php echo $data['ETAT']; ?></p><br>
    <p>Nom : </p><p><?php echo $data['NOM']; ?></p><br>
    <p>Année : </p><p><?php echo $data['mise_circulation']; ?></p><br>
    <p>Kilométres :</p><p><?php echo $data['km']; ?></p><br>
    <p>Prix : </p><p><?php echo $data['prix']; ?></p>
  </div>
</div>
<?php
} else { ?>
  <p>No data found</p>
<?php } ?>
</div>
                <div class="formulaire">
                    <form>
                      <div>
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" placeholder="Nom" required>
                      </div>
                      <div>
                        <label for="surname">Prénom :</label>
                        <input type="text" id="surname" name="surname" placeholder="Prénom" required>
                      </div>
                      <div>
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                      </div>
                      <div>
                        <label for="phone">Numéro de téléphone :</label>
                        <input type="tel" id="phone" name="phone" placeholder="Numéro de téléphone" required>
                      </div>
                      <div>
                        <label for="message">Message :</label>
                        <textarea style="width: 700px;height: 100px;" id="message" name="message" rows="4" placeholder="Saisissez votre commentaire" required>Bonjour, j'aimerais davantage de renseignement concernant cette AUDI Q2</textarea>
                      </div>
                      <div>
                        <input type="submit" value="Envoyer">
                      </div>
                    </form>
                  </div>
            </div>
        </div>
        
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
        <script src="script.js"></script>
</body>
</html>