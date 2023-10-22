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
     <a href="./site.php"><img src="/photo/Capture d'écran 2023-07-18 104210.png" alt="logo"></a> 
    </div>
    <nav>
      <ul>
        <li><a href="./Boutique.php">Boutique</a></li>
        <li><a href="./service.php">Service</a></li>
        <li><a href="./Contact.php">Contact</a></li>
      </ul>
    </nav>
    <main class="peugeot">
        <div>
            <img src="/photo/peugeot 3008.jpg" alt="voiture">
        </div>
        <div>
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
                <textarea style="width: 700px;height: 200px;" id="message" name="message" rows="4" placeholder="Saisissez votre commentaire" required></textarea>
              </div>
              <div>
                <input type="submit" value="Envoyer">
              </div>
            </form>
          </div>
    </main>
    <footer>
      <div class="contact">
        <p>Contact</p>
        <ul>
          <li><a href="Garage.parrot@gmail.com">Garage.parrot@gmail.com</a></li>
          <li>tél : 06 06 06 06 06</li>
        </ul>
      </div>
      <div>
        <p>Horaire d'ouverture : <br>
          lun: 08:45-12:00, 14:00-18:00 <br>
          mar: 08:45-12:00, 14:00-18:00 <br>
          mer: 08:45-12:00, 14:00-18:00 <br>
          jeu: 08:45-12:00, 14:00-18:00 <br>
          ven: 08:45-12:00, 14:00-18:00 <br>
          sam: 08:45-12:00,<br>
          dim: Fermé
          </p>
      </div>
    </footer>
  </header>
</body>
</html>