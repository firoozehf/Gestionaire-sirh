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
  </header>