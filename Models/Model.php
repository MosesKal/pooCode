<?php

namespace App\Models;

use App\Db\Db;

class Model extends Db
{
    //Table de la base de donnees
    protected $table;

    //Instance de Db
    private $db;

    public function findAll()
    {
        $query = $this->query('SELECT * FROM '. $this->table);
        return $query->fetchAll();
    }

    protected function query(string $sql, array $attributs = null)
    {
        // On recupere l'instance de DB

        $this ->db = Db::getInstance();

        // On verifie si on a des attributs
        if($attributs !== null){
            //requete preparee
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
            return $query;
        }else{
            //Requete simple
            return $this->db->query($sql);
        }
    }
}