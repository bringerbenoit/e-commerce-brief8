<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="Contenu/style.css" />
    <title><?= $titre ?></title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<body>

<!-- HEADER  -->
        <header>
            <nav class="navbar bg-colo fixed-top ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="index.php"><h2 class=''>Accueil</h2></a>
                <a class="navbar-brand" href="index.php?action=panier"><h2 class=''>panier</h2></a>
            </div>
            </nav>
        </header>

<!-- MAIN -->
    
    <section class="container">

            <?= $contenu ?>
        </div>
    </section>

<!-- FOOTER -->
       
        <footer id="piedBlog">
            Blog réalisé avec PHP, HTML5 et CSS. BENOIT
        </footer>
    
</body>
</html>