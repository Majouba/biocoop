<?php

class Promotion {

    private $id; // l'identifiant
    private $libelle; // le libellé
    private $mois; // le mois
    private $annee; // l'année
    private $laFamille; // la famille de produit (objet FamilleProduit)
    private $lesLignes; // la collection des lignes de promotion (tableau array)

    function __construct($id, $libelle, $mois, $annee, $laFamille, $lesLignes) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->mois = $mois;
        $this->annee = $annee;
        $this->laFamille = $laFamille;
        $this->lesLignes = $lesLignes;
    }

    public function getId() {
        return $this->id;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function getMois() {
        return $this->mois;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function getLaFamille() {
        return $this->laFamille;
    }

    public function getLesLignes() {
        return $this->lesLignes;
    }

    /* méthode qui retourne les lignes de promotions pour lesquelles le pourcentage de réduction
      est supérieur ou égal au paramètre de la méthode */

      public function getLesLignesPromoRed($pourcentageReduc) {
        $lesPromo=[];
        foreach($this->lesLignes as $uneLigne){
            if($pourcentageReduc<=$uneLigne->getPourcentageReduction()){
                $lesPromo[]=$uneLigne;
            }

        }
        return $lesPromo;
    }

}

?>