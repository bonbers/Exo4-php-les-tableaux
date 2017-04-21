<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <title>Exo 4 Tableau php</title>
   </head>

   <body>

   <p><?php
  $annee = array(
      "Janvier","Février", "Mars", "Avril","Mai","Juin","Juillet", "Aout",
      "Septembre","Octobre","Novembre","Décembre");
echo $annee [2]. "<br />";
echo $annee [5]. "<br />";
$annee [7] = "Août";
echo $annee [7]. "<br />";
       ?></p>
  <p><?php
$base = array(
  "02" => "Aisne",
  "59" => "Nord",
  "60" => "Oise",
  "62" => "Pas-de-Calais",
  "80" => "Somme",
);
echo $base [59]. "<br />";
$base["51"] = "Reims";
echo $base[51];

   ?></p>

   <p><?php

   $annee = array(
       "Janvier","Février", "Mars", "Avril","Mai","Juin","Juillet", "Aout",
       "Septembre","Octobre","Novembre","Décembre");

       foreach ($annee as $mois){
         echo"- ".$mois."<br />";
       }

    ?></p>

    <p><?php

    $base = array(
      "02" => "Aisne",
      "59" => "Nord",
      "60" => "Oise",
      "62" => "Pas-de-Calais",
      "80" => "Somme",
    );
    foreach ($base as $departement){
      echo "- ".$departement."<br />";
    }
    ?></p>

    <p><?php

    $base = array(
      "02" => "Aisne",
      "59" => "Nord",
      "60" => "Oise",
      "62" => "Pas-de-Calais",
      "80" => "Somme",
    );
    foreach ($base as $index=>$valeur){
      echo "-Departement ".$valeur.", -Numero ".$index."<br />";
    }

     ?></p>




   </body>

</html>
