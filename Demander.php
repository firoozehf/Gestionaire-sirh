<?php 
$js = "";
$css = "style.css";
$titre = "Demande de congé";
require_once('head.php'); 

?>
<article>
    <div class="container">
      <h2>Demande de congé</h2>
      <form>
        <div class="form-group">
          <label for="nom">Nom:</label>
          <input type="text" id="nom" name="nom" />
        </div>
        <div class="form-group">
          <label for="date-debut">Date de début:</label>
          <input type="date" id="date-debut" name="date-debut" />
        </div>
        <div class="form-group">
          <label for="date-fin">Date de fin:</label>
          <input type="date" id="date-fin" name="date-fin" />
        </div>
        <div class="form-group">
          <label for="motif">Motif:</label>
          <textarea id="motif" name="motif"></textarea>
        </div>
        <button type="submit">Envoyer</button>
      </form><br><br>

    </div>
</article>
    <?php
require_once('foot.php'); 