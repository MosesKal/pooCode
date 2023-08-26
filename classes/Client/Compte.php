<?php 

namespace App\Client;
/**
 * Objet Compte banquaire
 */
class Compte
{
    private $nom;

    private $prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

}
