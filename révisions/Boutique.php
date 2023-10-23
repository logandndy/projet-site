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
            <p>Véhicule neufs</p>
            <p>Véhicule occasions</p>
          </div>
         
          <div class="Vente">
            <div class="neuf">
                <div>
                    <img src="/photo/peugeot 3008.jpg" alt="voiture">
                    <div class="para">
                        <p>
                            <ul>
                                <li>Peugeot 3008</li>
                                <li>2022</li>
                                <li>0km</li>
                                <li>51 000€</li>
                            </ul>
                        </p>
                        <p><a href="#" onclick="toggleDescription('description1')">Détails</a></p>
                        <div class="description" id="description1" style="display: none;">
                            <span class="close" onclick="toggleDescription('description1')">X</span>
                            <!-- Contenu de la description -->
                            <h2>Peugeot 3008</h2>
                            <p>Caractéristiques <br>
                                Année :
                                2022 <br>
                                Provenance :
                                Importé  <br>
                                Mise en circulation :
                                25/02/2022 <br>
                                Contrôle technique :
                                Non requis <br> 
                                Première main :
                                Non <br> 
                                Kilométrage compteur :
                                0 km <br>
                                Energie :
                                Diesel <br>
                                Boite de vitesse :
                                Automatique <br>
                                Couleur :noir <br>
                                Nombre de portes :
                                5 </p>
                            
                        </div>
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
                            <textarea style="width: 700px;height: 100px;" id="message" name="message" rows="4" placeholder="Saisissez votre commentaire" required>Bonjour, j'aimerais davantage de renseignement concernant cette Peugeot 3008</textarea>
                          </div>
                          <div>
                            <input type="submit" value="Envoyer">
                          </div>
                        </form>
                      </div>
                </div>
                <div>
                    <img src="/photo/Opel mokka.jpg" alt="voiture">
                    <div class="para">
                        <p>
                            <ul>
                                <li>OPEL MOKKA</li>
                                <li>2021</li>
                                <li>0km</li>
                                <li>24 000€</li>
                            </ul>
                        </p>
                        <p><a href="#" onclick="toggleDescription('description2')">Détails</a></p>
                        <div class="description" id="description2" style="display: none;">
                            <span class="close" onclick="toggleDescription('description2')">X</span>
                                <!-- Contenu de la description -->
                            <h2>OPEL MOKKA</h2>
                            <p>Caractéristiques <br>
                                Année :
                                2021 <br>
                                Provenance :
                                France <br>
                                Mise en circulation :
                                30/11/2021 <br>
                                Contrôle technique :
                                Non requis  <br>
                                Première main :
                                Non  <br>
                                Kilométrage compteur :
                                0 km <br>
                                Energie :
                                Diesel <br>
                                Boite de vitesse :
                                Manuelle <br>
                                Couleur :rouge <br>
                                Nombre de portes :
                                5 <br>
                                Nombre de places :
                                5 <br>
                                Longueur :
                                4,15 m <br>
                                Volume de coffre :
                                Petit coffre </p>
                        </div>
                    </div>
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
            <div class="occas">
                <div>
                    <img src="/photo/citroen.jpg" alt="voiture">
                    <div class="para">
                        <p>
                            <ul>
                                <li>Citroen C3</li>
                                <li>2021</li>
                                <li>25 020km</li>
                                <li>16 200€</li>
                            </ul>
                        </p>
                        <p><a href="#" onclick="toggleDescription('description3')">Détails</a></p>
                        <div class="description" id="description3" style="display: none;">
                            <span class="close" onclick="toggleDescription('description3')">X</span>
                                <!-- Contenu de la description -->
                            <h2>Citroen C3</h2>
                            <p>Caractéristiques <br>
                                Année :
                                2021 <br>
                                Provenance :
                                France <br>
                                Mise en circulation :
                                01/03/2021 <br>
                                Contrôle technique :
                                Non requis <br> 
                                Première main :
                                Non <br> 
                                Kilométrage compteur :
                                25 020 km <br>
                                Energie :
                                Essence <br>
                                Boite de vitesse :
                                Manuelle <br>
                                Couleur :blanc/toit rouge <br>
                                Nombre de portes :
                                5 <br>
                                Nombre de places :
                                5 <br>
                                Longueur :
                                4 m <br>
                                Volume de coffre :
                                Grand coffre </p>
                            
                        </div>
                    </div>
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
                <div>
                    <img src="/photo/AUDI.jpg" alt="voiture">
                    <div class="para">
                        <p>
                            <ul>
                                <li>AUDI Q2</li>
                                <li>2021</li>
                                <li>14 271km</li>
                                <li>25 990€</li>
                            </ul>
                        </p>
                        <p><a href="#" onclick="toggleDescription('description4')">Détails</a></p>
                        <div class="description" id="description4" style="display: none;">
                            <span class="close" onclick="toggleDescription('description4')">X</span>
                                <!-- Contenu de la description -->
                            <h2>AUDI Q2</h2>
                            <p>Caractéristiques <br>
                                Année :
                                2021 <br>
                                Provenance :
                                France <br>
                                Mise en circulation :
                                15/09/2021 <br>
                                Contrôle technique :
                                Non requis <br> 
                                Première main :
                                Oui <br> 
                                Kilométrage compteur :
                                14 271 km <br>
                                Energie :
                                Essence <br>
                                Boite de vitesse :
                                Manuelle <br>
                                Couleur :argent <br>
                                Nombre de portes :
                                5 <br>
                                Nombre de places :
                                5 <br>
                                Longueur :
                                4,21 m <br>
                                Volume de coffre :
                                Moyen Coffre </p>
                            
                        </div>
                    </div>
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