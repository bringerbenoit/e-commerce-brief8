<?php

require_once 'Modele/Modele.php';
/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Commentaire extends Modele {

// Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idproduit) {
        $sql = 'select * from categorie';
        $commentaires = $this->executerRequete($sql, array($idproduit));
        return $commentaires;
    }

    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $contenu, $idproduit) {
        $sql = 'insert into commentaire(COM_DATE, COM_AUTEUR, COM_CONTENU, id_commentaire)'
            . ' values(?, ?, ?, ?)';
    }
}