<?php include 'header_back.php';?>
<div class="col">
  <h1 class="text-center mt-5 mb-3">Dépenses</h1>
  <table class="table table-warning table-striped table-hovermt-2">
    <thead>
      <tr>
        <th scope="col" class="text-center">Utilisateur</th>
        <th scope="col" class="text-center">Montant</th>
        <th scope="col" class="text-center">Catégorie</th>
        <th scope="col" class="text-center">Date</th>
        <th scope="col" class="text-center"></th>
        <th scope="col" class="text-center"></th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php
      $expenses = get_all_expenses();
      foreach ($expenses as $expense => $info) :?>
        <tr>
          <td><a href="user.php?user_id=<?= $info['user_id'] ?>"><?= $info['first_name'] ?> <?= $info['last_name']?></a></td>
          <td><?= $info['exp_amount'] ?>€</td>
          <td><?= $info['exp_label']?></td>
          <td><?= $info['exp_date']?></td>
          <td><a href="#" class="btn btn-danger btn-sm">Supprimer</a></td>
          <td><a href="modify_exp.php?user_id=<?= $info['user_id'] ?>&exp_id=<?= $info['exp_id']?>" class="btn btn-info btn-sm">Modifier</a></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<?php include 'footer.php'; ?>
