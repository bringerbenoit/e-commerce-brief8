<?php
require_once 'Modele/Modele.php';

class Panier {
    
    private $items = array();
    private $cookieName = "mon_panier";
    
    public function __construct() {
        if(isset($_COOKIE[$this->cookieName])) {
            $this->items = unserialize($_COOKIE[$this->cookieName]);
        }
    }
    
    public function ajouterArticle($articleId, $quantite) {
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
    
    public function getArticles() {
        return $this->items;
    }
    
    private function sauvegarderPanier() {
        setcookie($this->cookieName, serialize($this->items), time() + (86400 * 30), "/");
    }
}
    ?>