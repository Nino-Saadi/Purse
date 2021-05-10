<?php
$main_title;
include 'header_back.php';
$transac_info = get_donut_info();
?>
<div class="col mt-2 d-flex justify-content-center align-items-center flex-column">
  <h1 class="text-center mt-5">Bienvenue dans le tableau de bord</h1>
  <h2 class="desc text-center h3 mt-5">Vous pouvez sélectionner les différentes options
    proposé sur votre gauche pour commencer à gérer
    vos finances</h2>

    <div class="chart-container mt-4">
      <canvas id="donghut_chart" data-exp="<?= $transac_info[0]['exp_total']?>" data-inc="<?= $transac_info[0]['inc_total']?>"></canvas>
    </div>

  </div>
  <?php include 'footer.php'; ?>
