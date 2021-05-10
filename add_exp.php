<?php include 'header_back.php';
$user_id = $_GET['user_id'];
$user_infos = get_user_infos($user_id);
// Si le user n'existe pas, alors get_user_infos renvoie vide
if ( empty($user_infos) ) : ?>
  <div class="col">
    <div class="alert alert-danger">
      Cet utilisateur n'existe pas
    </div>
  </div>
<?php
// Le user existe
  else:
// On vérifie si le formulaire a été validé
// if (isset($_POST) && !empty($_POST) ) {
//   extract($_POST);
// $exp_infos = get_user_expenses($user_id);
//
//   add_expense($user_id, $amount, $label, $date);
// pretty_print_r(get_user_infos($user_id));


?>
  <div class="col">
  <h1 class="mt-5 text-center">Ajouter une dépense pour <?= $user_infos['first_name'] ?> <?= $user_infos['last_name'] ?></h1>

  <div class="col d-flex justify-content-center mt-5 ">
  <div class="col">
  <div class="card bg-light sign">
  <div class="card-body">
  <form class="" method="post">

  <!-- Case Montant-->
  <div class="mt-4 col-4">
  <label for="add_exp" class="form-label">Montant de la dépense</label>
  <input type="text" class="form-control" name="add_exp" value=""  required>
  </div>

  <!-- Case Catégorie -->
  <div class="mt-4 col-4">
  <label for="add_exp_lab" class="form-label">Détail de la dépense</label>
  <input type="text" class="form-control" name="add_exp_lab" value=""  required>
  </div>

  <!--case Date -->
  <div class="mt-4 col-4">
  <label for="add_exp_date" class="form-label">Date de la dépenses</label>
  <input type="datetime-local" class="form-control" name="add_exp_date" value=""  required>
  </div>

  <!-- Button de Validation -->
  <div class="col mt-5 col-4 text-center">
  <button type="submit" class="btn btn-success">Valider</button>
  </div>

  </form>
  </div>

  </div>
  </div>
  </div>
  </div>
<?php endif; ?>

<?php include 'footer.php'; ?>
