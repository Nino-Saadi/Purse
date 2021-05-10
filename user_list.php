<?php
$main_title;
include 'header_back.php';
// $users = get_user_info($_GET['user_id']);
?>
<div class="col">
  <h1 class="text-center mt-5">Gestionnaire de comptes</h1>

  <!-- Card d'un compte -->
  <div class="row">
    <?php
    $infos = get_user_list();
    foreach ($infos as $info => $value) : ?>
    <div class="col-4 account">
      <a href="personnal.php">
        <div class="card mt-5">
          <div class="card-body text-center">
            <h5 class="card-title text-center"><?= $value['first_name'] ?> <?= $value['last_name'] ?></h5>
            <img src="http://placekitten.com/800/600" alt="avatar" class="img-fluid">
            <a href="user.php?user_id=<?= $value['user_id'] ?>" class="btn btn-primary mt-5">Voir plus</a>
          </div>
        </div>
      </a>
    </div>
  <?php endforeach;
  ?>
</div>

<!-- Button permettant d'afficher la liste des utilisateurs -->
<div class="row">
  <!-- Button permettant de Add un compte -->
  <div class="col mt-5 text-center">
    <a href="add_user.php"><button type="button" class="btn btn-light">Ajouter un utilisateur</button></a>
  </div>
</div>
</div>


<?php include 'footer.php'; ?>
