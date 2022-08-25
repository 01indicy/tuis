<?php
    use Indiciez\Tuis\DBConfig;
    use Indiciez\Tuis\Security;

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once realpath("../vendor/autoload.php");

    $DB = new DBConfig();
    print_r($DB->createConnection());

    echo "<br><br>  ";

    $Encrypt = new Security($DB->createConnection());
    echo "Password :: ".$Encrypt::encryptPassword("Justin");