<?php
require_once("connect.php");

/* CATEGORIES */
/*test co & vérif empty */
$req_cat = $dbh->query('SELECT * FROM categories')->fetchAll();
var_dump($req_cat);

if(empty($req_cat)){
  /*Insert catégories initiale*/
  $sql = "INSERT INTO categories (libelle_catg, valeur_catg, duree_catg, consigne_catg)
   VALUES (:libelle, :valeur, :duree, :consigne)";
   $sql = "INSERT INTO categories (libelle_catg, valeur_catg, duree_catg, consigne_catg)
    VALUES (?, ?, ?, ?)";

   $insert_cat = $dbh->prepare($sql);
   $array_cat = array(':libelle' => null, ':valeur' => null, ':duree' => null, ':consigne' => null);

   $connaissance = array('connaissance', 2, '00:01:00', 'Question de Connaissance');
   $comprehension = array('comprehension', 3, '00:01:40', 'Question de Compréhension');
   $comportement = array('comportement', 2, '00:01:20', 'Question de Comportement');

   /*$insert_cat->execute(array(
     ':libelle' => ,
     ':valeur' => ,
     ':duree' => ,
     ':consigne' =>
   ));*/
   $insert_cat->execute($connaissance);
   $insert_cat->execute($comprehension);
   $insert_cat->execute($comportement);

   $req_cat = $dbh->query('SELECT * FROM categories')->fetchAll();
   var_dump($req_cat);
}
 ?>
