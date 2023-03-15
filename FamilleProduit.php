<?php

class FamilleProduit {

    private $id; // l'identifiant est au format chaîne de caractères
    private $libelle; // le libellé

    function __construct($id, $libelle) {
        $this->id = $id;
        $this->libelle = $libelle;
    }

        public function getId() {
        return $this->id;
    }

}

?>