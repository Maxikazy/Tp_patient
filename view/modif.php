<?php require_once("../Controller/connexion_bdd.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout circuit</title>
</head>
<body>
<h1>Modiffication du patient</h1>
    <h1>modiffier un patient</h1>
    <form class="row g-3" action="modiffclient.php" method="POST">
        <div class="col-md-4">
           <label for="nom" class="form-label">Nom du patient</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="col-md-4">
            <label for="prenom" class="form-label">prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="col-md-4">
           <label for="email" class="form-label">email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-4">
            <label for="age" class="form-label">date de naissance</label>
            <input type="date" class="form-control" id="age" name="age" required>
        </div>
       
        <div class="col-md-4">
            <label for="poid" class="form-label">poid</label>
            <input type="number" class="form-control" id="poid" name="poid" required>
        </div>
        <div class="col-md-4">
            <label for="taille" class="form-label">taille</label>
            <input type="number" class="form-control" id="taille" name="taille" required>
        </div>

        <div class="col-12">
                <button type="submit" class="btn btn-light">modiffier</button> </div>
    </form>
    
</body>
</html>