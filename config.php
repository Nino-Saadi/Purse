<?php
define ('DB_NAME','budget');
define ('USER','root');
define ('PWD','');
define ('HOST','localhost');

function db(){
  try{
    $option = [
      // Permet à PDO de lever des exceptions en cas d'erreurs SQL
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    // data source name
    $dsn = 'mysql:host='. HOST .';dbname='. DB_NAME .';charset=utf8';
    // insntance de la base de donées (pdo)
    $data_connect = new PDO($dsn, USER, PWD, $option);
    // echo "Connexion réussis";
    return $data_connect;
  } catch (PDOException $ex) {
    echo '<pre>'.print_r($ex, true).'</pre>';
    // message d'erreur
    printf('La connexion à la base de donnée a échoué avec le code "%s"', $ex->getCode());
    // arrêter l'exécution du script
    die();
  }
}

db();
?>
