
<?php 
$js = "";
$css = "style.css";
$titre = "Accueil";
require_once('headlogin.php'); ?>



<!DOCTYPE html>
<html>
  <head>
    <title>InscriptionPage</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="mp2.js"></script>
  </head>
  <body>
    <p id="datetime"></p>
    <script>
      var today = new Date();
      var date =
        today.getFullYear() +
        "-" +
        (today.getMonth() + 1) +
        "-" +
        today.getDate();
      var time =
        today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      var dateTime = date + " " + time;
      document.getElementById("datetime").innerHTML = dateTime;
    </script>
    <article>
    <form  method="post" class="login-form">
      <h2>Crée un compte</h2>
      <div class="form-group">
      <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" placeholder="Nom"required />
        <label for="nomdefamille">Nom de famille:</label>
        <input type="text" id="nomdefamille" name="nomdefamille" placeholder="Nom De Famille"required />
        <label for="numerodeportable">Numero de portable:</label>
        <input type="tel" id="numerodeportable" name="numerodeportable" placeholder="Numero De portable"required />
        <label for="email:">Email</label>
        <input type="email" id="email" name="email" placeholder="Email"required />
        <label for="dateembauche">Date embauche:</label>
        <input type="date" id="date" name="date" placeholder="Date embauche" required/>
        <label for="datedenaissance">Date de naissance:</label>
        <input type="date" id="datedenaissance" name="datedenaissance" placeholder="Datedenaissance" required/>
        <label for="pass">Password</label>
        <input  type="password"  id="pass" name="pass" > 
        <br>
      <input type="submit" name="creat" value="crée un compte">
      <br>
      <br>
      <a href="login.php">Déja inscrite</a>
        
      </div>
    </form>
</article>
  </body>
</html>
