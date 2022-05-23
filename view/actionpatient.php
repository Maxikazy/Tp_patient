<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout circuit</title>
</head>
<body>
<h1>Bienvenue dans le programme d'ajout de patient</h1>
    <h1>ajouter un patient</h1>
    <form  action="ajoutclient.php" method="POST">
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
        <div>
            date de naissance
        </div>
        <div>
            <div>
                <select name="date1" id="date-birth" class="form-control jour"> </select>
            </div>
            <div>
            <select name="date2" id="date-birth" class="form-control mois"> </select>
            </div>
            <div>
            <select name="date3" id="date-birth" class="form-control annees"> </select>
            </div>
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
                <button type="submit" class="btn btn-light">Ajouter</button> </div>
    </form>
    <script src="../public/jvs/test.js"></script>
</body>
</html>