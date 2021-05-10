<?php include 'header_back.php';?>
<div class="col">
<h1 class="text-center mt-5 mb-3">Revenus</h1>
  <table class="table table-warning table-striped text-center">
    <thead>
      <tr>
        <th scope="col" class="text-center">Utilisateur</th>
        <th scope="col" class="text-center">Montant</th>
        <th scope="col" class="text-center">Date</th>
        <th scope="col" class="text-center"></th>
        <th scope="col" class="text-center"></th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php
      $incomes = get_all_incomes();
      foreach ($incomes as $income => $info) :
        ?>
        <tr>
          <td><a href="user.php?id=<?= $info['user_id'] ?>"><?= $info['first_name'] ?> <?= $info['last_name']?></a></td>
          <td><?= $info['inc_amount'] ?>€</td>
          <td><?= $info['inc_receipt_date']?></td>
          <td><a href="#" class="btn btn-danger btn-sm">Supprimer</a></td>
          <td><a href="modify_inc.php?user_id=<?= $info['user_id'] ?>&inc_id=<?= $info['inc_id']?>" class="btn btn-info btn-sm">Modifier</a></td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
</div>
<?php include 'footer.php';?>
