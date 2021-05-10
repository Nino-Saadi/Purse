<?php

// On lie le fichier config.php à function.php
include 'config.php';

// Fonction permettant de prin_r plus facilement
function pretty_print_r($var) {
  echo '<pre>'.print_r($var, true).'</pre>';
}



// USER



// Fonction permettant d'afficher la list des $users
function get_user_list(){
  $dbh = db();
  $sql = <<<EOD
  SELECT `first_name`,`last_name`,`user_id`
  FROM users
EOD;
// Exécution de la requête
  $pick = $dbh->query($sql);
// Récupération des donnéelse
  $user_info = $pick->fetchAll();
  return $user_info;
}


// Fonction permettant l'ajout d'un user
function add_user($prenom, $nom, $birthday){
    $dbh = db();
    $sql = <<<EOD
    INSERT INTO `budget`.`users`(`first_name`,`last_name`,`birth_date`,)
    VALUES (:firstname, :lastname, :birthday)
EOD;

    $Stmt = $dbh->prepare($sql);

    $Stmt->bindParam(':firstname',$prenom);
    $Stmt->bindParam(':lastname',$nom);
    $Stmt->bindParam(':birthday',$birthday);
    $Stmt->execute();
}

// // Fonction permettant de récupérer l'id d'un user et d'avoir ces infos
function get_user_infos($user_id) {
  $dbh = db();
  $sql = <<<EOD
  SELECT DISTINCT `first_name`,`last_name`,`user_id`
  FROM `users`
  WHERE `users`.`user_id` = :user_id
EOD;
// Exécution de la requête
  $info = $dbh->prepare($sql);
  $info->bindValue(':user_id', $user_id);
// Récupération des donnéels
  $info->execute();
  return $info->fetch(PDO::FETCH_ASSOC);
}




// INCOME



// Fonction permettant de lister les revenus
function get_all_incomes(){
  $dbh = db();
  $sql = <<<EOD
  SELECT *
  FROM incomes
  JOIN users
  ON `users`.`user_id` = `incomes`.`user_id`
EOD;

// Exécution de la requête
  $pick = $dbh->query($sql);
// Récupération des donnéelse
  $inc_info = $pick->fetchAll();
  return $inc_info;
}


// Fonction permettant de rajouter une dépense
function get_user_incomes($user_id) {
    $dbh = db();
    $sql = <<<'EOD'
        SELECT
            `incomes`.inc_amount,
            `incomes`.inc_id,
            DATE(`incomes`.inc_receipt_date) AS inc_receipt_date,
            `incomes_categories`.inc_cat_name
        FROM `budget`.`incomes`
        INNER JOIN `budget`.`incomes_categories`
        ON `incomes`.inc_cat_id = `incomes_categories`.inc_cat_id
        WHERE `budget`.`incomes`.user_id = :user_id
        ORDER BY inc_receipt_date ASC
EOD;
    $userIncomeStmt = $dbh->prepare($sql);
    $userIncomeStmt->bindValue(':user_id', $user_id);
    $userIncomeStmt->execute();
    $userIncome = $userIncomeStmt->fetchAll();
    return $userIncome;
}

  // pretty_print_r(get_user_income($user_id));





// Expenses



// Fonction permettant d'avoir la liste des dépenses
function get_all_expenses(){
  $dbh = db();
  $sql = <<<EOD
  SELECT *
  FROM expenses
  JOIN users
  ON `users`.`user_id` = `expenses`.`user_id`
EOD;

// Exécution de la requête
  $pick = $dbh->query($sql);
// Récupération des donnéelse
  $exp_info = $pick->fetchAll();
  return $exp_info;
}


// Fonction permettant l'ajout d'une dépenses
function add_expense($user_id, $amount, $label, $date){
    $dbh = db();
    $sql = <<<EOD
    INSERT INTO `budget`.`expenses`(`exp_amount`,`exp_label`,`exp_date`,`user_id`)
    VALUES (:exp_amount, :exp_label, :exp_date)
    WHERE `expenses`.`user_id` = :user_id
EOD;

    $Stmt = $dbh->prepare($sql);
    $Stmt->bindParam(':user_id', $user_id);
    $Stmt->bindParam(':exp_amount',$amount);
    $Stmt->bindParam(':exp_label',$label);
    $Stmt->bindParam(':exp_date', $date);
    $Stmt->execute();
}



// Fonction permettant d'avoir les dépenses d'un user
function get_user_expenses($user_id) {
    $dbh = db();
    $sql = <<<'EOD'
        SELECT
            `expenses`.exp_amount,
            `expenses`.exp_id,
            DATE(`expenses`.exp_date) AS exp_date,
            `expenses`.exp_label
        FROM `budget`.`expenses`
        WHERE `budget`.`expenses`.user_id = :user_id
        ORDER BY exp_date ASC
EOD;
    $userExpensesStmt = $dbh->prepare($sql);
    $userExpensesStmt->bindValue(':user_id', $user_id);
    $userExpensesStmt->execute();
    $userExpenses = $userExpensesStmt->fetchAll();
    // return $userExpenses;
}




// Donghut


// Fonction permettant de faire la somme des dépenses et des revenus

function get_donut_info(){
  $dbh = db();
  $sql = <<<EOD
  SELECT SUM(exp_amount) AS exp_total,
  SUM(inc_amount) AS inc_total
  FROM expenses, incomes
EOD;

// Exécution de la requête
  $pick = $dbh->query($sql);
// Récupération des donnéelse
  $transac_info = $pick->fetchAll();
  return $transac_info;
}
