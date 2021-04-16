
<?php
// var_dump($_POST);
// Récupération des données du formulaires
$image = $_POST['pro_photo'];
$reference = $_POST['pro_ref'];
$categorie = $_POST['pro_cat_id'];
$libelle = $_POST['pro_libelle'];
$description = $_POST['pro_description'];
$prix = $_POST['pro_prix'];
$stock = $_POST['pro_stock'];
$couleur = $_POST['pro_couleur'];
$bloque = $_POST['pro_block'];
$d_ajout = date("y/m/d");

var_dump($image);
var_dump($reference);
var_dump($categorie);
var_dump($libelle);
var_dump($description);
var_dump($prix);
var_dump($stock);
var_dump($couleur);
var_dump($bloque);


   // Preparation de la connexion BDD.
   require "connexion_bdd.php";
    $db = connexionBase();
    

 // Préparation de la requete.
 $requete = $db->prepare("INSERT INTO produits(pro_ref, pro_cat_id, pro_photo, pro_libelle,pro_description,pro_prix,pro_stock,pro_couleur,pro_d_ajout)
 VALUES(:Reference,:Categorie,:Photo,:Libelle,:Description,:Prix,:Stock,:Couleur,:d_ajout)");
 $requete->bindValue(":Reference",$reference);
 $requete->bindValue(":Categorie",$categorie);
 $requete->bindValue(":Photo",$image);
 $requete->bindValue(":Libelle",$libelle);
 $requete->bindValue(":Description",$description);
 $requete->bindValue(":Prix",$prix);
 $requete->bindValue(":Stock",$stock);
 $requete->bindValue(":Couleur",$couleur);
 $requete->bindValue(":d_ajout",$d_ajout);

 // Execution de la requête
 $Envoyer = $requete->execute();
 // var_dump($Envoyer);

?>






