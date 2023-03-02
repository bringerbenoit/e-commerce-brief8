<?php $this->titre = "Mon Blog"; ?>
<div class=container>
    <div class=row>
        <div class='col-md-3 col-12'>
        <div class="card" style="width: 18rem;">
            <?php foreach ($produits as $produit):
                ?>
                <article>
                    <header>
                        <a href="<?= "index.php?action=produit&id=" . $produit['id_produit'] ?>">
                        <img src="<?= 'image/'.$produit['photo'] ?>" class="card-img-top" alt="<?= $produit['titre'] ?>">
                        <div class="card-body">
                        <h5 class="card-title"><?= $produit['titre'] ?></h5>
                        <p class="card-text">Prix : <?= $produit['prix'] ?></p>
                        <p class="card-text">Stok : <?= $produit['stock'] ?></p>
                        <a href="#" class="btn btn-primary">Ajouter au panier</a>
                        </a>
                    </header>
                </article>
                <hr />
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
