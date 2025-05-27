<?php
session_start();
$chapter = $_SESSION['chapter'];
$acte = $_SESSION['acte'];
$vie = $_SESSION['vie'];
$exp = $_SESSION['exp'];
$armor = $_SESSION['armor'];
$strength = $_SESSION['strength'];
$damage = $_SESSION['damage'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../css/base.css" />
  <title>Chapitre 1 - Acte 1</title>
</head>
<body>
  <nav class="navbar">
    <div class="stat">
      <div class="stat-item">
        ❤️ Vie : <span id="Vie"><?php echo $_SESSION['vie']; ?></span>
      </div>
      <div class="stat-item">
        ⭐ Exp : <span id="Experience"><?php echo $_SESSION['exp']; ?></span>
      </div>
      <div class="stat-item">
        🛡️ Armure : <span id="Armure"><?php echo $_SESSION['armor']; ?></span>
      </div>
      <div class="stat-item">
        💪 Force : <span id="Force"><?php echo $_SESSION['strength']; ?></span>
      </div>
      <div class="stat-item">
        ⚔️ Dégâts : <span id="Dégats"><?php echo $_SESSION['damage']; ?></span>
      </div>
    </div>
  </nav>

  <main>
    <div class="content">
      <div class="title">
        <h1 id="title">ERREUR_TITRE</h1>
      </div>
      <div class="description">
        <p id="description">ERREUR_DESC</p>
      </div>
      <div class="image">
        <img id="image" src="img/erreur.png" alt="Image événement" />
      </div>
      <div class="action">
        <button id="action1" class="action-button">⚔️ Attaquer</button>
        <button id="action2" class="action-button">🛡️ Défendre</button>
        <button id="action3" class="action-button">🏃 Fuir</button>
      </div>
    </div>
  </main>
</body>
</html>
