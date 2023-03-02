<?php

require_once 'Modele/Produit.php';
require_once 'Modele/Commentaire.php';
require_once 'Vue/Vue.php';

class ControleurProduit {

    private $produit;
    private $commentaire;

    public function __construct() {
        $this->produit = new Produit();
        $this->commentaire = new Commentaire();
    }

    // Affiche les détails sur un produit
    public function produit($idProduit) {
        $produit = $this->produit->getProduit($idProduit);
        $vue = new Vue("Produit");
        $vue->generer(array('produit' => $produit));
    }

    // Ajoute un commentaire à un produit
    public function commenter($auteur, $contenu, $idProduit) {
        // Sauvegarde du commentaire
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idProduit);
        // Actualisation de l'affichage du produit
        $this->produit($idProduit);
    }

}
