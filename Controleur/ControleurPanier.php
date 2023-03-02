<?php
require_once 'Modele/Cookie.php';

class ControleurPanier {

    public function afficherPanier() {
        // Créer une instance de la classe "Panier"
        $panier = new Panier();

        // Récupérer les articles du panier
        $articles = $panier->getArticles();

        // Afficher la vue du panier en passant les articles en paramètre
        include('vues/VuePanier.php');
    }
 
    public function ajouterArticle() {
        // Récupérer les données du formulaire d'ajout d'article
        $articleId = $_POST['article_id'];
        $quantite = $_POST['quantite'];

        // Ajouter l'article au panier
        $panier = new Panier();
        $panier->ajouterArticle($articleId, $quantite);

    }

    public function retirerArticle() {
        // Récupérer l'ID de l'article à retirer
        $articleId = $_GET['article_id'];

        // Retirer l'article du panier
        $panier = new Panier();
        $panier->retirerArticle($articleId);


    }

    public function viderPanier() {
        // Vider le panier
        $panier = new Panier();
        $panier->viderPanier();


    }
}
