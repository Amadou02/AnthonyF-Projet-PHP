<?php
//Vérification de l'existence du fichier xml puis chargement et stockage dans une variable définie
if (file_exists('source.xml')) {
    $pages = simplexml_load_file('source.xml');
} else {
    exit('Erreur lors du chargement du fichier xml');
}
//Initialisation des variables id et 
$idPage = '';
$pageTitle = '';
//
if (isset($_GET) && !empty($_GET)) {
    $idPage = $_GET['id'];
}
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <title><?= $pages->page[0]->title ?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                    // Création de chaque lien dans la navbar selon l'id de la page et le titre du menu
                    foreach ($pages as $page => $pageMenu) {
                        ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?id=<?= $pageMenu['id'] ?>"><?= $pageMenu->menu ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <?php
        // Affichage du contenu selon l'id de la page
        if ($idPage == '1') {
            echo $pages->page[0]->content;
        } elseif ($idPage == '2') {
            echo $pages->page[1]->content;
        } elseif ($idPage == '3') {
            echo $pages->page[2]->content;
        } elseif ($idPage == '4') {
            echo $pages->page[3]->content;
        }
        ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>