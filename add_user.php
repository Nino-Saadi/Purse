<?php include 'header_back.php';
if (isset($_POST) && !empty($_POST) ) {
  // Extract prend toute les $_POST en compte et les convertis en variables
  // $firstname = $_POST["firstname"];
  // $name = $_POST["lastname"];
  // $birthday = $_POST["birthday"];
  extract($_POST);
  add_user($firstname, $lastname, $birthday);
}
?>

<!-- Fenêtre d'Inscription -->
<div class="col d-flex justify-content-center mt-5">
  <div class="card bg-light sign">
    <div class="card-body">

      <form class="" method="post">
        <legend>Ajouter un utilisateur</legend>

        <!-- Case Prénom -->
        <div class="mt-3">
          <label for="firstname" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="firstname" value="" placeholder="Skampo" required>
        </div>

        <!-- Case Nom -->
        <div class="mt-3">
          <label for="lastname" class="form-label">Nom</label>
          <input type="text" class="form-control" name="lastname" value="" placeholder="Sama" required>
        </div>

        <!-- Case Anniversaire -->
        <div class="mt-3">
          <label for="birthday" class="form-label">Date d'Anniversaire</label>
          <input type="date" class="form-control" name="birthday" value="" placeholder="Skampo" required>
        </div>

        <div class="col mt-3">
          <span class="help-block">Vous devez avoir plus de 18 ans</span>
        </div>


        <!-- Button de Validation -->
        <div class="col mt-3 text-center">
          <button type="submit" class="btn btn-success">Valider</button>
        </div>

      </form>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
