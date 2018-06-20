<?php
require_once("connect.php");

/* CATEGORIES */
/*test co & vérif empty */
$req = $dbh->query('SELECT * FROM gameplay')->fetchAll();
var_dump($req);

if(empty($req)){
   $sql = "INSERT INTO gameplay (libelle_gameplay, valeur_gameplay, duree_gameplay, consigne_gameplay)
    VALUES (?, ?, ?, ?)";

   $insert = $dbh->prepare($sql);

   $connaissance = array('connaissance', 2, '00:01:00', 'Question de Connaissance');
   $comprehension = array('comprehension', 3, '00:01:40', 'Question de Compréhension');
   $comportement = array('comportement', 2, '00:01:20', 'Question de Comportement');

   $insert_cat->execute($connaissance);
   $insert_cat->execute($comprehension);
   $insert_cat->execute($comportement);

   $req_cat = $dbh->query('SELECT * FROM categories')->fetchAll();
   var_dump($req_cat);
}
 ?>
