<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use App\Autoloader;
    use App\Client\Compte as CompteClient;
    use App\Banque\{CompteCourant, CompteEpargne};

    require_once './classes/Autoloader.php';
    Autoloader::register();

    $compteClient = new CompteClient("Kalunga", "MosesDev");
    $compteCourant = new CompteCourant("Kalunga", "MosesDev",5000,5);
    $compteEpargne = new CompteEpargne("Zyongo","Chrino", 1200.3, 10);
    $client = new CompteClient("Gloire", 'Eliezer');

    //on instancie le compte

    echo "<hr>".var_dump($compteClient);
    echo "<br><hr>". var_dump($compteCourant);
    echo "<br><hr>". var_dump($compteEpargne);
    echo "<br>". var_dump($client);
    // $compte2 = new Compte("Mosesdev", 389.25);

    // var_dump($compte2);
