<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Table Style</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">

  <link rel="stylesheet" href="css/style-menu.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/tableau.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/form.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/affichage.css" media="screen" title="no title" charset="utf-8">
</head>

<body>

  <?php include("menu.php") ?>

  <div class="table_form_container">

    <?php
    try{
      $bdd = new PDO('mysql:host=localhost;dbname=gsi_parapentes_bdd;charset=utf8','root','');
    }catch(Exception $e){
      die('Erreur : ' . $e->getMessage());
    }

    $req1 = $bdd->prepare('SELECT nomPassager, prenomPassager, poidsPassager, dateNaissancePassager FROM Passager');
    $req1 -> execute();
    $result = $req1->fetchall();


    $t_head = array("Prenom", "Nom", "Poids", "Date de naissance");

    ?>

<div class="table_container">

    <table>




      <?php
      $i = 0;
      for ($i=0; $i < sizeof($t_head); $i++) {
        echo '<th>'.$t_head[$i]."</th>";
      }
      $j = sizeof($result);
      foreach ($result as $row_key => $row_value) {
        echo "<tr>";
        $i++;
        echo '<td>'.$row_value['prenomPassager'].'</td>';
        echo '<td>'.$row_value['nomPassager'].'</td>';
        echo '<td>'.$row_value['poidsPassager'].'</td>';
        echo '<td>'.$row_value['dateNaissancePassager'].'</td>';

        echo "</tr>";
      }
      ?>

    </table>

  </div>


  <section class="form_container">
    <h1>Nouveau passager</h1>

    <form class ="form" action="affichage_passager.php" method="post">
      <div>
        <label for="prenom">Prenom</label>
        <input placeholder="Jean" type="text" id="prenom" name="passager_prenom" />
      </div>

      <div>
        <label for="nom">Nom</label>
        <input placeholder="Neymar" type="text" id="nom" name="passager_nom" />
      </div>

      <div>
        <label for="poids">Poids</label>
        <input placeholder="70" type="text" id="poids" name="passager_poids" />
      </div>

      <div class="date_container">
        <label for="Date de naissance">Date de naissance</label>
        <div class="date_sub_container">
          <input placeholder="01" type="text" id="jour" name="passager_jour" />
          <input placeholder="02" type="text" id="mois" name="passager_mois" />
          <input placeholder="1983" type="text" id="annee" name="passager_annee" />
        </div>
      </div>

      <div class="button">
        <button class="form_button" type="submit">Envoyer</button>
      </div>
    </form>


  </section>
  </div>

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
