<?php
session_start();
require_once("../Controller/connexion_bdd.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Public/CSS/index.css">
    <title>document</title>
</head>

<body>  
<?php
    if (isset($_GET['voyage'])) {
        if ($_GET['voyage'] == 1) :?>
            <div class="alert alert-success" role="alert" style="margin: 0%;">
                <strong>Merci de votre confience. Nous esperons que vous serez satisfait</strong> 
            </div>
        <?php endif; 
    } ?>
<?php
    if (isset($_GET['success'])) :

        if ($_GET['success'] == true) : ?>

            <div class="alert alert-success" role="alert" style="margin: 0%;">
                <strong>Bienvenue <?= $_SESSION['nom'] ?> <?= $_SESSION['prenom'] ?></strong> vous étez bien connecté
            </div>
        <?php endif ?>
    <?php endif ?>
<?php
    if (isset($_GET['deconnexion'])) {
        if ($_GET['deconnexion'] == true) :
            session_unset();?>
            <div class="alert alert-success" role="alert" style="margin: 0%;">
                <strong>Vous vous etez bien deconnecté</strong> 
            </div>
        <?php endif; 
    } ?>
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
    
        
</body>

</html>