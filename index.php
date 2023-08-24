<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "./classes/Client/Compte.php";
    require_once "./classes/Client/CompteCourant.php";
    require_once "./classes/Client/CompteEpargne.php";

    //on instancie le compte

    $compte1 = new CompteCourant('Moses', 500, 200);
    var_dump($compte1);

    $compteEpargne = new CompteEpargne("Mosesdev", 200, 10);

    $compteEpargne->versertInterets();
    

    var_dump($compteEpargne);

    // $compte2 = new Compte("Mosesdev", 389.25);

    // var_dump($compte2);

    // use App\Autoloader;
    // use App\Client\Compte as CompteClient;
    // use App\Banque\Compte as CompteBanque;

    // require_once './classes/Autoloader.php';
    // Autoloader::register();

    // $client = new CompteClient("Kalunga", "Moses");
    // $banque = new CompteBanque();
