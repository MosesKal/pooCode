<?php

namespace App\Banque;

/**
 * Compte avec taux d'interets
 */
class CompteEpargne extends Compte
{
    private $tauxInterets;
    

    /**
     * Constructeur du compte epargne
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde 
     * @param integer $taux
     */
    public function __construct(string $nom, float $montant, int $taux)
    {
        parent::__construct($nom, $montant);

        $this->tauxInterets = $taux;
    }

    /**
     * Get the value of taux_interets
     */ 
    public function getTauxInterets(): int
    {
        return $this->tauxInterets;
    }

    /**
     * Set the value of taux_interets
     *
     * @return  self
     */ 
    public function setTauxInterets($tauxInterets):self
    {
        $this->tauxInterets = $tauxInterets;

        return $this;
    }

    public function versertInterets(){
        $this->solde = $this-> solde + ($this->solde * $this->tauxInterets /100);
    }
}