<?php 
$js = "";
$css = "style.css";
$titre = "Accueil";
require_once('head.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>absent present</title>
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
    <form action="login.php" method="post" class="login-form">
      <h2>Login</h2>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required />
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass">
      </div>
      <button type="submit">Submit</button>
    </form>
</article>
  </body>
</html>
