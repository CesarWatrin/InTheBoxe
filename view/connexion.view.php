<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/src/style/connexion.css">
    <title>InTheBoxe</title>
  </head>
  <body>
    <header>
      <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
      <nav class="topNavigation">
        <ul>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <li id= "Club"><a href="../controle/club.ctrl.php">Club</a></li>
          <li id="Entrainement"><a href="../controle/entrainement.ctrl.php">Entrainement</a></li>
          <li id="Compétition"><a href="#Competition">Competition</a></li>
          <li id="Contact"><a href="../controle/contact.ctrl.php">Contact</a></li>
          <li id="Connexion"><a href="../controle/connexion.ctrl.php">Connexion</a></li>
        </ul>
      </nav>
    </header>
    <article>
    <div id="divco">
      <img src="../view/src/img/connexion_logo.png" alt="">
      <h1>Connexion</h1>
      <form class="connexion" action="../controle/connexion.ctrl.php" method="post">
        <fieldset>
          <p>
            <!-- <label for="mail"><h2>Adresse mail</h2></label> -->
            <input type="email" placeholder="Adresse mail" name="mail" id="mail" required/>
          </p>
          <p>
            <!-- <label for="mdp"><h2>Mot de passe </h2></label> -->
            <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required/>
          </p>
          <input type="submit" id="submit" value="Connexion">
          <?php global $erreur; ?>
          <p style='color:red'> <?=$erreur ?></p>
        </fieldset>
      </form>
    </div>
  </article>
  </body>
</html>
