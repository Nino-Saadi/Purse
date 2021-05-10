<?php include 'header_back.php';
$user_id = $_GET['user_id'];
$user_infos = get_user_infos($user_id);
$inc_infos = get_user_incomes($user_id);
?>
<div class="col">
  <h1 class="mt-5 text-center">Ajouter un revenu pour <?= $user_infos['first_name'] ?> <?= $user_infos['last_name'] ?></h1>

  <div class="col d-flex justify-content-center mt-5 ">
    <div class="col">
      <div class="card bg-light sign">
        <div class="card-body">
          <form class="" method="post">

            <!-- Case Montant-->
            <div class="mt-3 col-4">
              <label for="add_inc" class="form-label">Montant du revenu</label>
              <input type="text" class="form-control" name="add_inc" value=""  required>
            </div>

            <!-- Case Catégorie -->
            <div class="mt-3 col-4">
              <label for="add_inc_cat" class="form-label">Catégorie du revenu</label>
              <select  class="form-select" name="add_inc_cat" value="" required>
                <option value="add_inc_cat1">Salaire</option>
                <option value="add_inc_cat2">BIC</option>
                <option value="add_inc_cat3">BNC</option>
                <option value="add_inc_cat4">Pension</option>
                <option value="add_inc_cat5">Rente</option>
                <option value="add_inc_cat6">Produit financier</option>
                <option value="add_inc_cat7">Allocation chômage</option>
                <option value="add_inc_cat8">Allocation familial</option>
                <option value="add_inc_cat9">Autre allocation</option>
            </div>

            <!--case Date -->
            <div class="mt-3 col-4">
              <label for="add_exp_date" class="form-label">Date d'entrée du revenu</label>
              <input type="datetime-local" class="form-control" name="add_exp_date" value=""  required>
            </div>

            <!-- Button de Validation -->
            <div class="col mt-3 col-4 text-center">
              <button type="submit" class="btn btn-success">Valider</button>
            </div>

          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
