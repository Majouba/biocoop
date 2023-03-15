<?php

class Produit {

    private $reference; // la référence du produit
    private $designation; // la désignation du produit
    private $tarif; // le tarif du produit
    private $laFamille; // la famille du produit (objet FamilleProduit)

    function __construct($reference, $designation, $tarif, $laFamille) {
        $this->reference = $reference;
        $this->designation = $designation;
        $this->tarif = $tarif;
        $this->laFamille = $laFamille;
    }

        public function getReference() {
        return $this->reference;
    }
    public function getDesignation() {
        return $this->designation;
    }
    public function getTarif() {
        return $this->tarif;
    }

}

?>