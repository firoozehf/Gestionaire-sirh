<?php
$js = "";
$css = "style.css";
$titre = "Accueil";
require_once('head.php'); 
if (isset($_FILES ['file'])){
  $name=$_FILES['file']['name'];
  $tmp=$_FILES['file']['tmp_name'];
  if (move_uploaded_file($tmp,"upload/$name")){

    echo "Merci";

  }else {
    echo "ERROR :" .$_FILES['file']['error'];
  }
}
?>
<article class="signaler">
    <h1>Signaler présence/absence</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="date">Date :</label>
        <input type="date" id="date" name="date" required><br><br>
        <label for="status">Statut :</label>
        <select id="status" name="status" required>
            <option value="">--Choisir le statut--</option>
            <option value="present">Présent</option>
            <option value="absent">Absent</option>
        </select>
        <div id="file-container" style="display:none">
            <label for="file"> <br>  Merci de justifier votre absence en téléchargeant un fichier :</label>
            <input type="file" name="file"><br><br>
        </div>
        <input type="submit" value="Enregistrer">
    </form>
 
</article>

<div class="status">
    <p>Statut actuel :</p>
    <div id="current-status"></div>
</div>

<script>
const form = document.querySelector('form');
const currentStatus = document.getElementById('current-status');
const fileContainer = document.getElementById('file-container');
const statusSelect = document.getElementById('status');

statusSelect.addEventListener('change', function(e) {
    if (e.target.value === 'absent') {
        fileContainer.style.display = 'block';
    } else {
        fileContainer.style.display = 'none';
    }
});

form.addEventListener('submit', function(e) {
    e.preventDefault();
    const name = this.elements.name.value;
    const date = this.elements.date.value;
    const status = this.elements.status.value;
    if (status === 'present') {
        currentStatus.innerHTML = `<p>${date} - Présent : <span class="present">${name}</span></p>`;
    } else if (status === 'absent') {
        currentStatus.innerHTML = `<p>${date} - Absent : <span class="absent">${name}</span></p>`;
    }
    this.reset();
});
</script>

</main>
<?php require_once('foot.php'); ?>