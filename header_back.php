<?php include 'function.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>">
    <title></title>
  </head>
  <body>
    <header>

      <nav class="navbar navbar-light">

        <div class="container-fluid">

          <!-- Logo -->
            <div class="col-2">
              <a class="logo h1" href="dashboard.php">
                Purse
              </a>
            </div>

           <!-- Color Picker-->
            <div class="col-10">
              <h1 class="text-center h2"></h1>
            </div>

          </div>

      </nav>

    </header>
    <main class="container-fluid">
      <div class="row">
        <div class="col-2 side">
          <?php include 'sidebar.php'; ?>
        </div>
