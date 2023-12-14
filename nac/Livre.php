<?php
namespace nac;

class Livre {
    // Propriétés (ou attributs) privées
    private $titre;
    private $auteur;
    private $anneePublication;

    // Constructeur
    public function __construct($titre, $auteur, $anneePublication) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
    }

    // Getter pour le titre
    public function getTitre() {
        return $this->titre;
    }

    // Setter pour le titre
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    // Getter pour l'auteur
    public function getAuteur() {
        return $this->auteur;
    }

    // Setter pour l'auteur
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    // Getter pour l'année de publication
    public function getAnneePublication() {
        return $this->anneePublication;
    }

    // Setter pour l'année de publication
    public function setAnneePublication($anneePublication) {
        $this->anneePublication = $anneePublication;
    }
}