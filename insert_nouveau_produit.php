<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php
    require ("connexion_bdd.php"); // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase("localhost","root","","jarditou"); // Appel de la fonction de connexion
    ?>
</head>


<body>

<div align = "center">
<font size="+3">Nouveau produit</font></h1>
</center></div>
<br>


    <div class="container">
        <!--container de la page-->

        <form class="was-validated" action="script_ajout_prod.php" method="POST" name="Détail produit" id="Détail produit">
            <div class="form-group">

        <div class="col-12 d-flex justify-content-center">
        <a href="http:/jarditou/jarditou_photos" target="" ><a>
        <input type="file"
       id="pro_photo" name="pro_photo"
       accept="image/jpeg">
       
        </div>
        <form class="was-validated" action="script_ajout_prod.php" method="POST" name="Détail produit" id="Détail produit">
            <div class="form-group">
                
                <label for="pro_ref">Référence :</label><input type="text" class="form-control" name="pro_ref" id="pro_ref" autocomplete="pro_ref" aria-required="true" aria-invalid="true" />
                <label for="pro_cat_id">Categorie :</label><input type="text" class="form-control" name="pro_cat_id" id="pro_cat_id" autocomplete="pro_cat_id" aria-required="true" aria-invalid="true" />
                <label for="pro_libelle">Libelle :</label><input type="text" class="form-control" name="pro_libelle" id="pro_libelle" autocomplete="pro_libelle" aria-required="true" aria-invalid="true" />
                <label for="pro_description">Description :</label><input type="text" class="form-control" name="pro_description" id="pro_description" autocomplete="pro_description" aria-required="true" aria-invalid="true" />
                <label for="pro_prix">Prix :</label><input type="text" class="form-control" name="pro_prix" id="pro_prix" autocomplete="pro_prix" aria-required="true" aria-invalid="true" />
                <label for="pro_stock">Stock :</label><input type="text" class="form-control" name="pro_stock" id="pro_stock" autocomplete="pro_stock" aria-required="true" aria-invalid="true" />
                <label for="pro_couleur">Couleur :</label><input type="text" class="form-control" name="pro_couleur" id="pro_couleur" autocomplete="pro_couleur" aria-required="true" aria-invalid="true" />

            </div>
            bloque&nbsp :
            <div class="form-check form-check-inline">
                 <label class="form-check-label" for="pro_block"><input class="form-check-input" type="radio" name="pro_block" id="pro_block1" value=1>Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="pro_block"><input class="form-check-input" type="radio" name="pro_block" id="pro_block2" value=0>Non</label>
            </div> 
<br>
            Date d'ajout :
        
        <input type="date" id="start" name="trip-start"
       value=""
       min="2021-04-13" max="">
        <br>
       <br>

            <div class="d-flex justify-content-center" name="actionProduit">
            <a class="btn" href="tableaupdo.php"><button class="btn-primary">Retour</button></a>
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
            <br>
            
        </form>
       


        

    </div>

    
    <!--fichiers Javascript nécessaires à Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
