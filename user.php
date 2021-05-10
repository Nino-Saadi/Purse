<?php include 'header_back.php';
// Variable permettant de récupérer les informations
$user_id = $_GET['user_id'];
$user_infos = get_user_infos($user_id);
$inc_infos = get_user_incomes($user_id);
$exp_infos = get_user_expenses($user_id);
?>
<div class="col text-center">
  <h1 class="mt-5"><?= $user_infos['first_name'] ?> <?= $user_infos['last_name'] ?> </h1>

  <!-- Tableau avec onglet -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="expenses-tab" data-bs-toggle="tab" data-bs-target="#expenses" type="button" role="tab" aria-controls="expenses" aria-selected="true">Revenus</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="incomes-tab" data-bs-toggle="tab" data-bs-target="#incomes" type="button" role="tab" aria-controls="incomes" aria-selected="false">Dépenses</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">

    <!-- Onglet Revenus -->
    <div class="tab-pane fade show active" id="expenses" role="tabpanel" aria-labelledby="expenses-tab">
      <table class="table table-warning table-striped table-hover mt-2">
        <thead>
          <tr>
            <th scope="col" class="text-center">Catégorie</th>
            <th scope="col" class="text-center">Montant</th>
            <th scope="col" class="text-center">Date</th>
            <th scope="col" class="text-center"></th>
            <th scope="col" class="text-center"></th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php
          foreach ($inc_infos as $inc_info => $info) :?>
          <tr>
            <td><?= $info['inc_cat_name']?></td>
            <td><?= $info['inc_amount'] ?>€</td>
            <td><?= $info['inc_receipt_date']?></td>
            <td><a href="#" class="btn btn-danger btn-sm">Supprimer</a></td>
            <td><a href="modify_inc.php?user_id=<?= $user_infos['user_id'] ?>&inc_id=<?= $info['inc_id'] ?>" class="btn btn-info btn-sm">Modifier</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- Button permettant de Add un revenus-->
      <div class="col mt-5 text-center">
        <a href="add_inc.php?user_id=<?= $user_infos['user_id'] ?>"><button type="button" class="btn btn-light">Ajouter un revenu</button></a>
      </div>
    </div>

    <!-- Onglet Dépenses -->
    <div class="tab-pane fade" id="incomes" role="tabpanel" aria-labelledby="incomes-tab">
      <table class="table table-warning table-striped table-hover mt-2">
        <thead>
          <tr>
            <th scope="col" class="text-center">Catégorie</th>
            <th scope="col" class="text-center">Montant</th>
            <th scope="col" class="text-center">Date</th>
            <th scope="col" class="text-center"></th>
            <th scope="col" class="text-center"></th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php foreach ($exp_infos as $exp_info => $info) :?>
            <tr>
              <td><?= $info['exp_label']?></td>
              <td><?= $info['exp_amount'] ?>€</td>
              <td><?= $info['exp_date']?></td>
              <td><a href="#" class="btn btn-danger btn-sm">Supprimer</a></td>
              <td><a href="modify_exp.php?user_id=<?= $user_infos['user_id'] ?>&exp_id=<?= $info['exp_id'] ?>" class="btn btn-info btn-sm">Modifier</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <!-- Button permettant de Add une dépense-->
        <div class="col mt-5 text-center">
          <a href="add_exp.php?user_id=<?= $user_infos['user_id'] ?>"><button type="button" class="btn btn-light">Ajouter une dépense</button></a>
        </div>
    </div>
  </div>

</div>
<?php include 'footer.php'; ?>
