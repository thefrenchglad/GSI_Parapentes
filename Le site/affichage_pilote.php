<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Table Style</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">

  <link rel="stylesheet" href="css/style-menu.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/tableau.css" media="screen" title="no title" charset="utf-8">

</head>

<body>


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
        echo '<td>'.$row_value['prenomPilote'].'</td>';
        echo '<td>'.$row_value['nomPilote'].'</td>';
        echo '<td>'.$row_value['poidsPilote'].'</td>';
        echo '<td>'.$row_value['niveau'].'</td>';
        echo '<td>'.$row_value['dateNaissancePilote'].'</td>';

        echo "</tr>";
    }

    ?>





    </table>




</body>
