<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="<?= $css ?>" />
    <?php if(strlen($js) > 0) { ?><script src="<?= $js ?>"></script> <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
<header class="head">
<nav>
    <ul>
      <li><a href="Accueil.html">Accueil</a></li>
      <li><a href="Demander.html">demander un congé</a></li>
      <li><a href="#">Mes demande</a></li>
      <li><a href="#">Contact directeur</a></li>
    </ul>
  </nav>
  </header>