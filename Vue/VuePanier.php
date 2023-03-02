<h1>Panier</h1>

<?php if(empty($articles)): ?>
    <p>Le panier est vide.</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>ID de l'article</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($articles as $articleId => $quantite): ?>
                <tr>
                    <td><?php echo $articleId; ?></td>
                    <td><?php echo $quantite; ?></td>
                    <td><a href="index.php?action=retirer_article&article_id=<?php echo $articleId; ?>">Retirer</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<form action="index.php?action=ajouter_article" method="post">
    <label for="article_id">ID de l'article :</label>
    <input type="text" name="article_id" id="article_id">
    <br>
    <label for="quantite">Quantité :</label>
    <input type="text" name="quantite" id="quantite">
    <br>
    <button type="submit">Ajouter au panier</button>
</form>


