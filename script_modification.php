
<?php
// var_dump($_POST);
// Récupération des données du formulaires

$reference = $_POST['pro_ref'];
$libelle = $_POST['pro_libelle'];
$description = $_POST['pro_description'];
$prix = $_POST['pro_prix'];
$stock = $_POST['pro_stock'];
$couleur = $_POST['pro_couleur'];
$bloque = $_POST['pro_block'];
$d_modif = date("y/m/d");


var_dump($reference);
var_dump($libelle);
var_dump($description);
var_dump($prix);
var_dump($stock);
var_dump($couleur);
var_dump($bloque);
var_dump($d_modif);


   // Preparation de la connexion BDD.
   require "connexion_bdd.php";
    $db = connexionBase("localhost","root","","jarditou");
    

 // Préparation de la requete de modification.
 $requete = $db->prepare("UPDATE produits(pro_ref, pro_libelle,pro_description,pro_prix,pro_stock,pro_couleur,pro_d_modif,pro_block)
 VALUES(:Reference,:Libelle,:Description,:Prix,:Stock,:Couleur,:d_modif,:bloque)");
 $requete->bindValue(":Reference",$reference);
 $requete->bindValue(":Libelle",$libelle);
 $requete->bindValue(":Description",$description);
 $requete->bindValue(":Prix",$prix);
 $requete->bindValue(":Stock",$stock);
 $requete->bindValue(":Couleur",$couleur);
 $requete->bindValue(":d_modif",$d_modif);
 $requete->bindValue(":bloque",$bloque);


 // Execution de la requête
 $Modifier = $requete->execute();
 // var_dump($Modifier);


?>






