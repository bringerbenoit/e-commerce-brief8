<h1>Panier</h1>

<?php if(empty($panier)): ?>
    <p>Le panier est vide.</p>
<?php else: ?>
<!--     <pre>
        <?php //var_dump($data);?>
    </pre> -->
    <table>
        <thead>
            <tr>
                <th>ID de l'article</th>
                <th>Titre du produit</th>
                <th>Prix</th>
                <th>Nb en stock</th>
                <th>image</th>
                <th>Quantité Commandée</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $produit): ?>
                <tr>
                    <td><?php echo $produit['id_produit']; ?></td>
                    <td><?php echo $produit['titre']; ?></td>
                    <td><?php echo $produit['prix'];?></td>
                    <td><?php echo $produit['stock']- $panier[$produit['id_produit']];?></td>
                    <td><img class='image3'  src='image/<?php echo $produit['photo'];?>'></td>
                    <td><?php echo $panier[$produit['id_produit']]; ?></td>
                    <td><a href="<?= "index.php?action=supprProduitPanier&id=". $produit['id_produit'] ?>">supprimé</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<!-- <form action="index.php?action=ajouter_article" method="post">
    <label for="article_id">ID de l'article :</label>
    <input type="text" name="article_id" id="article_id">
    <br>
    <label for="quantite">Quantité :</label>
    <input type="text" name="quantite" id="quantite">
    <br>
    <button type="submit">Ajouter au panier</button>
</form> -->


