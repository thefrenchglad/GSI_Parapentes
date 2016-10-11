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

    $req1 = $bdd->prepare('SELECT prenomPilote, nomPilote, poidsPilote, niveau, dateNaissancePilote FROM Pilote');
    $req1 -> execute();
    $result = $req1->fetchall();

    $t_head = array("Prenom", "Nom", "Poids", "Niveau", "Date de naissance");

    ?>

    <table class="table_container">
      <?php
      $i = 0;
      for ($i=0; $i < sizeof($t_head); $i++) {
        echo '<th>'.$t_head[$i]."</th>";
      }
      $j = sizeof($result);
      foreach ($result as $row_key => $row_value) {
        echo "<tr>";
        $i++;
        echo '<td>'.$row_value['prenomPilote'].'</td>';
        echo '<td>'.$row_value['nomPilote'].'</td>';
        echo '<td>'.$row_value['poidsPilote'].'</td>';
        echo '<td>'.$row_value['niveau'].'</td>';
        echo '<td>'.$row_value['dateNaissancePilote'].'</td>';

        echo "</tr>";
      }
      ?>
    </table>

    <section class="form_container">
      <h1>Nouveau Pilote</h1>

      <form class ="form" action="affichage_pilote.php" method="post">
        <div>
          <label for="prenom">Prenom</label>
          <input placeholder="Jean" type="text" id="prenom" name="pilote_prenom" />
        </div>

        <div>
          <label for="nom">Nom</label>
          <input placeholder="Neymar" type="text" id="nom" name="pilote_nom" />
        </div>

        <div>
          <label for="poids">Poids</label>
          <input placeholder="70" type="text" id="poids" name="pilote_poids" />
        </div>

        <div class="date_container">
          <label for="Date de naissance">Date de naissance</label>
          <div class="date_sub_container">
            <input placeholder="01" type="text" id="jour" name="pilote_jour" />
            <input placeholder="02" type="text" id="mois" name="pilote_mois" />
            <input placeholder="1983" type="text" id="annee" name="pilote_annee" />
          </div>
        </div>

        <div>
          <label class="only_integer" for="Numéro de licence">Numéro de licence</label>
          <input placeholder="123456" type="text" id="num_licence" name="pilote_num_licence" />
        </div>

        <div class="">
          <label for="Niveau">Niveau</label>
          <select class="" name="pilote_niveau">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>


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

  if(isset($_POST['pilote_annee'])AND(isset($_POST['pilote_nom']))AND(isset($_POST['pilote_prenom']))AND(isset($_POST['pilote_poids']))AND(isset($_POST[pilote_num_licence]))) {

    $date = $_POST['pilote_annee'] . "-" . $_POST['pilote_mois'] . "-" . $_POST['pilote_jour'];
    $nom = $_POST['pilote_nom'];
    $prenom = $_POST['pilote_prenom'];
    $poids = $_POST['pilote_poids'];
    $niveau = $_POST['pilote_niveau'];
    $numLicence = $_POST['pilote_num_licence'];

    $req1 = $bdd->prepare('insert into pilote(numLicence,niveau,nomPilote,prenomPilote,dateNaissancePilote,poidsPilote) values (:numLicence, :niveau, :nom, :prenom, :dateNaissance, :poids)');
    $req1->execute(array('nom' => $nom, 'prenom' => $prenom, 'dateNaissance' => $date, 'poids' => $poids, 'niveau' => $niveau, 'numLicence' => $numLicence));
  }

  ?>

</body>
