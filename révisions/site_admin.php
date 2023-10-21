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
      <img src="/photo/Capture d'écran 2023-07-18 104210.png" alt="logo">
    </div>
    <nav class="navbar">
      <div>
        <a href="./connexion.php">connexion</a>
      </div>
        <ul>
          <li><a href="./Boutique.html">Boutique</a></li>
          <li><a href="./service.html">Service</a></li>
          <li><a href="./Contact.html">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
    <main>
      <div class="titre">
        <h1>Garage V.Parrot sqdqsd s</h1>
        <p>(entretien véhicule, vente de véhicule neuf et occasion)</p>
      </div>
      <div class="proposition">
          <div class="vehicule">
            <p>Bienvenue chez Garage V. Parrot - Votre destination de confiance pour l'achat de véhicules d'occasion de qualité à Toulouse ! Forts de notre expertise et de nos 15 années d'expérience, nous proposons une sélection minutieuse de véhicules d'occasion qui répondent aux plus hautes normes de qualité et de fiabilité. Que vous recherchiez une berline élégante, un SUV polyvalent ou une citadine pratique, nous avons le véhicule idéal pour vous. Chaque voiture de notre inventaire est soigneusement inspectée et entretenue, vous offrant ainsi une tranquillité d'esprit absolue. Découvrez notre collection exceptionnelle et trouvez la voiture qui correspond parfaitement à vos besoins et à votre style de vie. Chez Garage V. Parrot, nous nous engageons à vous fournir une expérience d'achat agréable et sans souci, tout en vous offrant un excellent rapport qualité-prix.</p>
            <a href="./Boutique.html">Découvrir</a>
          </div>
          <div class="service">
            <p>Explorez nos services de pointe au Garage V. Parrot - Votre partenaire automobile de confiance à Toulouse. Avec une équipe d'experts passionnés par leur métier, nous offrons une gamme complète de services de réparation et d'entretien pour garantir la performance et la longévité de votre véhicule. Que ce soit pour la réparation de la carrosserie, la mécanique des voitures ou l'entretien régulier, nous utilisons des techniques de pointe et des équipements de qualité pour vous fournir des résultats exceptionnels. Notre approche personnalisée nous permet de comprendre vos besoins spécifiques et de vous offrir un service adapté à votre voiture. Faites confiance à notre équipe expérimentée pour prendre soin de votre véhicule comme s'il était le nôtre. Découvrez nos services dès aujourd'hui et bénéficiez d'une expérience de service client hors pair.</p><br>
            <a href="./service.html">Découvrir</a>
          </div>
        </main>
      </div>
      <div class="formAvis">
        <h2>Laissez un témoignage</h2>
        <form method="post">
          <label for="nom">Nom:</label>
          <input type="text" id="nom" name="nom" required>
          
          <label for="commentaire">Commentaire:</label>
          <textarea id="commentaire" name="commentaire" required></textarea>
          
          <label for="note">Note:</label>
          <div class="rating">
            <input type="hidden" id="note" name="note" value="0" />
            <div class="stars">
                <label for="star5"><img src="/photo/etoile.png" alt="Étoile vide"></label>
                <label for="star4"><img src="/photo/etoile.png" alt="Étoile vide"></label>
                <label for="star3"><img src="/photo/etoile.png" alt="Étoile vide"></label>
                <label for="star2"><img src="/photo/etoile.png" alt="Étoile vide"></label>
                <label for="star1"><img src="/photo/etoile.png" alt="Étoile vide"></label>
            </div>
        </div>
          
          <button type="submit" name="submit">Envoyer</button>
        </form>
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
        <p>Horaire d'ouverture : <br>
          <br>
        lun: 08:45-12:00, 14:00-18:00 <br>
        mar: 08:45-12:00, 14:00-18:00 <br>
        mer: 08:45-12:00, 14:00-18:00 <br>
        jeu: 08:45-12:00, 14:00-18:00 <br>
        ven: 08:45-12:00, 14:00-18:00 <br>
        sam: 08:45-12:00<br>
        dim: Fermé
        </p>
      </div>
    </footer>
</body>
<script src="script.js"></script>
</html>