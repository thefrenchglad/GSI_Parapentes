

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style-menu.css">
  <link rel="stylesheet" href="css/knacss.css">
  <link rel="stylesheet" href="css/form.css">
  <link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">

  <title>Post passager</title>
</head>
<body>

  <?php

  try{
    $bdd = new PDO('mysql:host=localhost;dbname=gsi_parapentes_bdd;charset=utf8','root','');
  }catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
  }

  $date = $_POST['passager_annee']."-".$_POST['passager_mois']."-".$_POST['passager_jour'];
  $nom = $_POST['passager_nom'];
  $prenom = $_POST['passager_prenom'];
  $poids = $_POST['passager_poids'];

  $req1 = $bdd->prepare('insert into passager(nomPassager,prenomPassager,dateNaissancePassager,poidsPassager) values (:nom, :prenom, :dateNaissance, :poids)');
  $req1 -> execute(array('nom' => $nom, 'prenom' => $prenom, 'dateNaissance' => $date, 'poids' => $poids));




  ?>

</body>
</html>
