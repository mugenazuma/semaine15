<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail arcticle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php
    require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase("localhost","root","","jarditou"); // Appel de la fonction de connexion
  

    $pro_id = $_GET["pro_id"];

    $requete = "SELECT * FROM produits join categories on cat_id = pro_cat_id where pro_id=" . $pro_id;
    $result = $db->query($requete);

    // Renvoi de l'enregistrement sous forme d'un objet
    $produit = $result->fetch(PDO::FETCH_OBJ);
    ?>

</head>

<body>

<H1 align="center">Détail du produit</h1>

    <div class="container">
        <!--container de la page-->
        <form class="was-validated" action="script_modification.php" method="POST" name="Détail produit" id="Détail produit">
        
        <div class="container">
        <!--container de la page-->
        <form class="was-de" action="script_suppression.php" method="POST" name="Détail produit" id="Détail produit">
            <div class="form-group">
        
          
        

        <div class="col-12 d-flex justify-content-center">
        <img src="jarditou_photos/<?= $pro_id . "." . $produit->pro_photo ?>" class="w-50" alt="Image" title="<?= $pro_id . "." . $produit->pro_photo ?>
            "height= "400px" width="300px">.
        </div>

       
        <form name="Détail produit" id="Détail produit">
    
            <div class="form-group">
                <label for="pro_id">ID :</label><input type="text" class="form-control" name="pro_id" id="pro_id" value="<?php echo $produit->pro_id ?>"Readonly>
                <label for="pro_ref">Référence :</label><input type="text" class="form-control" name="pro_ref" id="pro_ref" value="<?php echo $produit->pro_ref ?>">
                <label for="pro_libelle">Libelle produit :</label><input type="text" class="form-control" name="pro_libelle" id="pro_libelle" value="<?php echo $produit->pro_libelle ?>">
                <label for="pro_description">Description produit :</label><input type="text" class="form-control" name="pro_description" id="pro_description" value="<?php echo $produit->pro_description ?>">
                <label for="pro_prix">Prix :</label><input type="text" class="form-control" name="pro_prix" id="pro_prix" value="<?php echo $produit->pro_prix ?>">
                <label for="pro_stock">Stock :</label><input type="text" class="form-control" name="pro_stock" id="pro_stock" value="<?php echo $produit->pro_stock ?>">
                <label for="pro_couleur">Couleur Produit :</label><input type="text" class="form-control" name="pro_couleur" id="pro_couleur" value="<?php echo $produit->pro_couleur ?>">

            </div>

        </form>
        Produit bloqué&nbsp :
            <div class="form-check form-check-inline">
                 <label class="form-check-label" for="pro_block"><input class="form-check-input" type="radio" name="pro_block" id="pro_block1" value=1>Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="pro_block"><input class="form-check-input" type="radio" name="pro_block" id="pro_block2" value=0>Non</label>
            </div> 
            <br>
      
            <div>
            Date d'ajout :
                <?php echo $produit->pro_d_ajout ?>
            </div>
            <div>
            Date de modification :
                <?php echo $produit->pro_d_modif ?>
                
    
            </div>


            <div class="d-flex justify-content-center" name="actionProduit">
            <a class="btn" href="tableaupdo.php"><button class="btn-dark">Retour</button></a>
            <button class="btn btn-success" type="submit">Modifier</button>
            <input class="btn btn-warning" type="submit" value="Supprimer">
            
        </div>
            <br>


    </div>

    
    <!--fichiers Javascript nécessaires à Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>



