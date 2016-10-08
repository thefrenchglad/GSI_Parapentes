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

  <title>Post pilote</title>
</head>
<body>

  <?php

  try{
    $bdd = new PDO('mysql:host=localhost;dbname=gsi_parapentes_bdd;charset=utf8','root','');
  }catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
  }

  $date = $_POST['pilote_annee']."-".$_POST['pilote_mois']."-".$_POST['pilote_jour'];
  $nom = $_POST['pilote_nom'];
  $prenom = $_POST['pilote_prenom'];
  $poids = $_POST['pilote_poids'];
  $niveau = $_POST['pilote_niveau'];
  $numLicence = $_POST['pilote_num_licence'];

  $req1 = $bdd->prepare('insert into pilote(numLicence,niveau,nomPilote,prenomPilote,dateNaissancePilote,poidsPilote) values (:numLicence, :niveau, :nom, :prenom, :dateNaissance, :poids)');
  $req1 -> execute(array('nom' => $nom, 'prenom' => $prenom, 'dateNaissance' => $date, 'poids' => $poids, 'niveau' => $niveau, 'numLicence' => $numLicence));

  ?>

</body>
</html>
