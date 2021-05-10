<?php include 'header_back.php';
$user_id = $_GET['user_id'];
$user_infos = get_user_infos($user_id);
$exp_infos = get_user_expenses($user_id);
?>
<div class="col text-center mt-5">
  <h1 class="mt-5"><?= $user_infos['first_name'] ?> <?= $user_infos['last_name'] ?></h1>
  <h2 class="h4 mt-4">Modifier une dépenses</h2>  
</div>
<?php include 'footer.php'; ?>
