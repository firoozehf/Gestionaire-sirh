<?php
$js = "";
$css = "style.css";
$titre = "Justifier une absence";
require_once('head.php');
?>

<article >
  <h1>Justifier une absence</h1>
  <p>Merci de justifier votre absence en téléchargeant un fichier :</p>
</article>
  <?php
  <form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="name" value="<?php echo $_GET['name']; ?>">
    
 