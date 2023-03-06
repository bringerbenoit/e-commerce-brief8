<?php $this->titre = "Mon Blog"; ?>

                <?php foreach ($produits as $produit):
                    ?>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    <article>
                            <a href="<?= "index.php?action=produit&id=" . $produit['id_produit'] ?>">
                            <img src="<?= 'image/'.$produit['photo'] ?>" class="card-img-top" alt="<?= $produit['titre'] ?>">
                            <div class="card-body">
                            <h5 class="card-title"><?= $produit['titre'] ?></h5>
                            <p class="card-text">Prix : <?= $produit['prix'] ?></p>
                            <p class="card-text">Stok : <?= $produit['stock'] ?></p>
                            <a href="<?= "index.php?action=panier&id=" . $produit['id_produit'] ?>" class="btn btn-primary">Ajouter au panier</a>
                            </a>
                    </article>
                    <hr />
            </div>
        </div>
    </div>
                <?php endforeach; ?>


