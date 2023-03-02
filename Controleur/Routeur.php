<?php
require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurProduit.php';
require_once 'Controleur/ControleurPanier.php';
require_once 'Vue/Vue.php';

class Routeur {

    private $ctrlAccueil;
    private $ctrlProduit;
    private $ctrlPanier;


    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlProduit = new ControleurProduit();
        $this->ctrlPanier = new ControleurPanier();

    }

    // Route une requête entrante : exécute l'action associée
    
    public function routerRequete() {
        try {
            if (!isset($_GET['action'])) {
               
              $this->ctrlAccueil->accueil();

            }
            else

            if ($_GET['action'] == 'produit') {
                $idProduit = intval($this->getParametre($_GET, 'id'));
                if ($idProduit != 0) {
                    $this->ctrlProduit->produit($idProduit);
                }
                else {
                    throw new Exception("Identifiant de produit non valide");
                }
            }

        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
 
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else {
            throw new Exception("Paramètre '$nom' absent");
        }
    }
}
?>
