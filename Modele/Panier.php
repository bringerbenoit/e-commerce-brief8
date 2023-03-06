<?php

class Panier {
    
    private $items = array();
    private $cookieName = "mon_panier";
    
    public function __construct() {
        if(isset($_COOKIE[$this->cookieName])) {
            $this->items = unserialize($_COOKIE[$this->cookieName]);
        }
    }
    
    public function ajouterArticle($articleId, $quantite) {
        echo "Ajouter au panier";
        if(isset($this->items[$articleId])) {
            $this->items[$articleId] += $quantite;
        } else {
            $this->items[$articleId] = $quantite;
        }
        $this->sauvegarderPanier();
    }
    
    public function retirerArticle($articleId) {
        unset($this->items[$articleId]);
        $this->sauvegarderPanier();
    }
    
    public function viderPanier() {
        $this->items = array();
        $this->sauvegarderPanier();
    }
    
    public function obtenirPanier() {
        return $this->items;
    }
    
/*     public function ajouterAuPanier($articleId) {
        $this->ajouterArticle($articleId, 1);
    } */
    
    private function sauvegarderPanier() {
        setcookie($this->cookieName, serialize($this->items), time() + (86400 * 30), "/");
    }
}
?>