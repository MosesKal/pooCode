<?php

namespace App\Banque;
use App\Client\Compte as CompteClient;
/**
 * Compte bancaire (etend la class Compte)
 */
class CompteCourant extends Compte
{
    private $decouvert;

    /**
     * Constructeur de compte courant
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde a l'ouverture
     * @param integer $decouvert Decouver autorise
     * @return void
     */
    public function __construct(CompteClient $compte, float $montant, int $decouvert)
    {
        parent::__construct($compte, $montant);
        $this->decouvert = $decouvert;
    }

    public function getDecouvert():int
    {
        return $this->decouvert;
    }

    public function setDecouvert(int $montant): self
    {
        if($montant >=0){
            $this->decouvert = $montant;
        }
        return $this;
    }

    public function retirer(float $montant){
        if($montant > 0 && $this->solde - $montant >= -$this->decouvert){
            $this->solde -= $montant;
        }else{
            echo "Solde insuffisant";
        }
    }
}