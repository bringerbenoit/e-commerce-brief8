<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Contenu/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title><?= $titre ?></title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<body>
    <div id="global">
    <div id="contenu">
        <header>
        <nav class="navbar bg-colo fixed-top ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="index.php"><h2 class=''>Acceil</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                 <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="Vue/VuePanier.php"><h2 class=''>panier</h2></a>
                </div>
            </div>
        </nav>
        </header>

            <?= $contenu ?>
        </div> <!-- #contenu -->
        <footer id="piedBlog">
            Blog réalisé avec PHP, HTML5 et CSS.
        </footer>
    </div> <!-- #global -->
</body>
</html>
<a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>