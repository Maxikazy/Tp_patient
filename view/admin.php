<?php require_once("../Controller/connexion_bdd.php"); 

    
    session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Tableau de bord </title>
  
    <link rel="stylesheet" href="../public/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <header class="bg-primary border-bottom border-2 border-dark">
        <div class="titre">
            <h1 class="vitemonvol"><a href="index.php" id="retour">B<span class="logo">la</span>B<span class="logo">la</span>D<span class="logo">0c</span></a></h1>
        </div><br>
        <div class="paraphrase">
            <p class="petit">Le site référence en terme de gestion de patient</p>
        </div>
        <nav>
            <ul class="navigation">
              

                <?php if (isset($_SESSION['id'])) : ?>

                    <?php if ($_SESSION['is_admin'] == 1) : ?>
                        <li class="onglet"><a href="admin.php" class="lien">Gestion du site</a></li>
                    <?php elseif ($_SESSION !== "") : ?>
                        <li class="onglet"><a href="profil.php" class="lien">Mon compte</a></li>
                    <?php endif ?>
                <?php else : ?>
                    <li class="onglet"><a href="connexion.php" class="lien">Connexion</a></li>
                <?php endif ?>
            </ul>
        </nav>
    </header>

    <h1 class="text-center">TOUT LES PATIENTS</h1>
    </div>
    
        <table class="text-center" >
            <thead>
                
                <tr style="padding: 20px;">
                    <th class="tablenom2" scope="col" style="padding: 10px;"></th>
                    <th class="tablenom2" scope="col" style="padding: 10px;">Nom</th>
                    <th class="tablenom2" scope="col" style="padding: 10px;">prénom </th>
                    <th class="tablenom2" scope="col" style="padding: 10px;">mail</th>
                    <th class="tablenom2" scope="col" style="padding: 10px;">age</th>
                    <th class="tablenom2" scope="col" style="padding: 10px;">poid</th>
                    <th class="tablenom2" scope="col" style="padding: 10px;">taille</th>
               >
                </tr>
            </thead>
            <tbody>
                <?php 
                $requete = "SELECT id, nom, prenom, age, email, poid, taille
                        FROM patient";
                $result = $connexion->query($requete);
                foreach ($result as $range) : ?>
                    <tr style="padding: 20px;">
                   
                        <th class="tablenom2" scope="row">user <?= $range["id"] ?></th>
                        <td  class="tablenom2" style="padding: 10px;"><?= $range["nom"] ?></td>
                        <td class="tablenom2" style="padding: 10px;"><?= $range["prenom"] ?></td>
                        <td class="tablenom2" style="padding: 10px;"><?= $range["email"] ?></td>
                        <td class="tablenom2" style="padding: 10px;"><?= $range["age"] ?></td>
                        <td class="tablenom2" style="padding: 10px;"><?= $range["poid"] ?></td>
                        <td class="tablenom2" style="padding: 10px;"><?= $range["taille"] ?></td>
             
                    </tr>               
                <?php endforeach ?>
            <tfoot>
                
                <div class="btn">
                <tr>
                    <td><a class="btn btn-success"  href="actionpatient.php" role="button">Ajout d'un patient</a></td>
                </div>
               
                
                </tr>           
            </tfoot>
            </tbody>
        </table>
    </div>
</body>

</html>