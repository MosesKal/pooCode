<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use App\Autoloader;
    use App\Client\Compte as CompteClient;
    use App\Banque\Compte as CompteBanque;

    require_once './classes/Autoloader.php';
    Autoloader::register();

    $client = new CompteClient("Kalunga", 1000);
    $banque = new CompteBanque();

    //on instancie le compte

    var_dump($compteEpargne);

    // $compte2 = new Compte("Mosesdev", 389.25);

    // var_dump($compte2);
