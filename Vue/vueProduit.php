<?php $this->titre ="index.php?action=produit&id=" . $produit['id_produit'] ?>
<article>
    <header>
        <h1 class="titreProduit"><?= $produit['titre'] ?></h1>
        <img class='image-2' src="<?= 'image/'.$produit['photo'] ?>">
    </header>
    <h2><?= $produit['marque'] ?></h2>
    <h2><?= $produit['titre'] ?></h2>
    <h2><?= $produit['description'] ?></h2>
    <h2><?= $produit['prix'] ?></h2>
    <h2><?= $produit['stock'] ?></h2>
</article>

