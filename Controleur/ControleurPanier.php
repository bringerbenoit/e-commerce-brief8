<?php
require_once 'Modele/Modele.php';
require_once 'Modele/Panier.php';
require_once 'Modele/Produit.php';


class ControleurPanier {

    private $panier;
    //private $commentaire;

    public function __construct() {
        $this->panier = new Panier();
        /*$this->commentaire = new Commentaire(); */
    }

    // Affiche les détails sur un produit
    public function getPanier() {
        $panier = $this->panier->obtenirPanier();
        $data = [];
        if(!empty($panier)){
            
            foreach ($panier as $key => $value) {
               // echo "{$key} => {$value} "; //$key est l'identifiant de l'instrument et $value est la quantité
                
                // créer une instanciation de la class Produit du produit.php
                $this->produit = new Produit();
                $produit = $this->produit->getProduit($key);
                array_push($data, $produit);
            }           
        }
        $vue = new Vue("Panier");

        $vue->generer(array('panier' => $panier, 'data' => $data));

    }
    public function ajouterPanier($id){
        //lancer une méthode de la classe Panier qui permet d'ajouter un instrument dans la panier
        $panier = $this->panier->ajouterArticle($id , 1);
        $this->getPanier();


    }
       
    // Retirer un instrument du panier
    public function supprimerArticle($id){
        $this->panier->retirerArticle($id);  
        $this->getPanier();          
    }

}


/* if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case 'ajouter':
            if(isset($_GET['id'])) {
                $panier->ajouterAuPanier($_GET['id']);
            }
            break;
        case 'retirer':
            if(isset($_GET['id'])) {
                $panier->retirerArticle($_GET['id']);
            }
            break;
        case 'vider':
            $panier->viderPanier();
            break;
    }
} */