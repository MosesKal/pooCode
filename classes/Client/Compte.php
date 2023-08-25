<?php 

namespace App\Client;
/**
 * Objet Compte banquaire
 */
 abstract class Compte
{
    //prorietes
    /**
     * Titulaire du compte
     *
     * @var string
     */
    protected $titulaire;

    /**
     * Solde du Compte
     *
     * @var float
     */
    protected $solde;


    /**
     * Constructeur du compte bancaire
     * @param string $titulaire Nom du titulaire du compte bancaire
     * @param float $sode solde du compte bancaire a l'ouverture
     */
    public function __construct(string $titulaire, float $solde=100)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }

    public function __toString()
    {
        return "Vous visualisez le compte de {$this->titulaire}, le solde est de {$this->solde} euros";
    }

    //Accesseurs

    /**
     * Getter de titulaire - Retourne la valeur du titulaire du Compte
     *
     * @return string
     */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    /**
     * Modifie le nom du titulaire et retourne l'objet
     *
     * @param string $nom
     * @return Compte Compte bancaire
     */
    public function setTitulaire(string $nom): self
    {
        if($nom !== ""){
            $this -> titulaire = $nom;
        }
        return $this;
    }


    /**
     * Retourne le solde du compte
     *
     * @return float Solde du compte
     */
    public function getSolde(): float
    {
        return $this->solde;
    }


    /**
     * Modifie le solde du compte
     *
     * @param float $montant
     * @return self
     */
    public function setSolde(float $montant): self
    {
        if($montant >=0){
            $this->solde = $montant;
        }
        return $this;
    }

    /**
     * Deposer de l'argent sur le compte bancaire
     *
     * @param float $montant Montant depose
     * @return void
     */
    public function deposer(float $montant)
    {
        if($montant > 0){
            $this->solde += $montant;
        }
    }


    /**
     * Retourne une chaine de caractere affichant le solde
     *
     * @return void
     */
    public function voirSolde()
    {
        return "Le solde du compte est de $this->solde dollars";
    }

    /**
     * Retire un montant du solde du compte
     *
     * @param float $montant Montant a retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        if($montant > 0 && $this->solde >= $montant){
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }
    }

}
